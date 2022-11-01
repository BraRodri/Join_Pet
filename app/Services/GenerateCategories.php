<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class GenerateCategories {

    public function generateCategories($parent, $level, $max, $parent_id = 0, $category_id = 0, &$content)
    {
        $level++;

        $query  = "SELECT id, title FROM categorias WHERE active = 1 AND parent_id = {$parent} ";
        $query .= (!empty($category_id)) ? "AND id <> {$category_id} " : "";
        $query .= "ORDER BY title ASC";

        $categories = DB::select($query);
        if (count($categories) > 0) {
            foreach ($categories as $category) {

                $id = $category->id;
                $title = $category->title;

                $text_select = str_pad($title, strlen($title) + ($level - 1), "-", STR_PAD_LEFT);
                $characters = substr($text_select, 0, ($level - 1));
                $text_select = str_replace($characters, $characters . " ", $text_select);

                $selection = ($parent_id == $category->id) ? 'selected="selected"' : '';
                $disable = (($level - 1) == $max) ? 'disabled="disabled"' : '';

                $content .= '<option value="' . $id . '" ' . $disable . ' ' . $selection . '>' . $text_select . '</option>';

                if (($level - 1) <= $max) {
                    self::generateCategories($id, $level, $max, $parent_id, $category_id, $content);
                }
            }
        }

        return $content;
    }

    public function getCategoryLevel($id_category)
    {
        $categoriesMenu = self::getCategoriesIdLevel();

        if (count($categoriesMenu) > 0) {
            for ($i = 0; $i < sizeof($categoriesMenu); $i++) {
                if ($categoriesMenu[$i]["id"] == $id_category) {
                    return $categoriesMenu[$i]["level"];
                    break;
                }
            }
        }
    }

    public function getCategoriesIdLevel()
    {

        $categoriesMenu = self::generateArrayCategories();
        $categoriesMenuWithLevels = array();

        if (count($categoriesMenu) > 0) {
            foreach ($categoriesMenu as $keyFamily => $family) {
                $categoriesMenuWithLevels[] = array("id" => $family["id"], "level" => 1);
                if (count($family['categories']) > 0) {
                    foreach ($family['categories'] as $keyCategory => $category) {
                        $categoriesMenuWithLevels[] = array("id" => $category["id"], "level" => 2);
                        if (count($category['subcategories']) > 0) {
                            foreach ($category['subcategories'] as $keySubCategory => $subcategory) {
                                $categoriesMenuWithLevels[] = array("id" => $subcategory["id"], "level" => 3);
                            }
                        }
                    }
                }
            }
        }

        return $categoriesMenuWithLevels;
    }

    public function generateArrayCategories()
    {

        $categoriesMenu = array();

        $query = "SELECT id, parent_id, title FROM categorias WHERE active = 1 AND parent_id = 0 ORDER BY title ASC";
        $families = DB::select($query);

        $counter = 0;
        if (count($families) > 0) {
            foreach ($families as $family) {
                $categoriesMenu[$counter] = array(
                    'id' => $family->id,
                    'title' => $family->title,
                    'level' => $counter,
                    'categories' => array()
                );

                $query = "SELECT id, parent_id, title FROM categorias WHERE active = 1 AND parent_id = {$family->id} ORDER BY title ASC";
                $categories = DB::select($query);

                if (count($categories) > 0) {
                    $counter2 = 0;
                    foreach ($categories as $category) {
                        $categoriesMenu[$counter]['categories'][$counter2] = array(
                            'id' => $category->id,
                            'title' => $category->title,
                            'level' => $counter2,
                            'subcategories' => array()
                        );

                        $query = "SELECT id, parent_id, title FROM categorias WHERE active = 1 AND parent_id = {$category->id} ORDER BY title ASC";
                        $subcategories = DB::select($query);

                        if (count($subcategories) > 0) {
                            $counter3 = 0;
                            foreach ($subcategories as $subcategory) {
                                $categoriesMenu[$counter]['categories'][$counter2]['subcategories'][] = array(
                                    'id' => $subcategory->id,
                                    'title' => $subcategory->title,
                                    'level' => $counter3,
                                );

                                $counter3++;
                            }
                        }
                        $counter2++;
                    }
                }
                $counter++;
            }
        }

        return $categoriesMenu;
    }

}

?>
