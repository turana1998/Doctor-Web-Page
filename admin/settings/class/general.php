<?php


class General
{

    public function PageNameGet()
    {
        return basename($_SERVER['PHP_SELF'], ".php");
    }

    public function Status($FileName, $sts)
    {
        header("Location:{$FileName}.php?status={$sts}");
    }
    public function StatusBlog($FileName, $sts)
    {
        header("Location:{$FileName}?status={$sts}");
    }

    public function SEO($str, $options = array())
    {
        $str = mb_convert_encoding((string) $str, "UTF-8", mb_list_encodings());
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true
        );
        $options = array_merge($defaults, $options);
        $char_map = array(


            //Latin symbols
            '©' => '(c)',

            //AZ

            'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G', 'Ə' => 'E',
            'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g', 'ə' => 'e'
        );

        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        $str = trim($str, $options['delimiter']);
        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }

    public function REFERER()
    {
        if ($_SERVER['HTTP_REFERER'] == null || $_SERVER['HTTP_REFERER'] == "") {
            $this->Status("index", "referer");
        }
    }


    public function Title()
    {
        global $CRUD;
        $Title = $CRUD->Select("nizamlamalar")["Title"];
        $Desc = $CRUD->Select("nizamlamalar")["Description"];
        $keys = $CRUD->Select("nizamlamalar")["keywords"];
        $img =  $_SERVER['SERVER_NAME'] . "/" . "images/logo-dark.png";
        $arr = [];
        $page = $this->PageNameGet();

        switch ($page) {
            case "index":
                $Title = $CRUD->Select("nizamlamalar")["Title"];
                $Desc = $CRUD->Select("nizamlamalar")["Description"];
                $keys = $CRUD->Select("nizamlamalar")["keywords"];
                $img = $_SERVER['SERVER_NAME'] . "/images/logo-dark.png";
                array_push($arr, $Title, $Desc, $keys, $img);
                return $arr;
            case "about":
                $Title = $CRUD->Select("nizamlamalar")["Basliq"];
                $Desc = strip_tags(mb_substr($CRUD->Select("nizamlamalar")["Mezmun"], 0, 200)) . "...";
                $keys = $CRUD->Select("nizamlamalar")["keywords"];
                $img = $_SERVER['SERVER_NAME'] . "/" . $CRUD->Select("nizamlamalar")["sekil"];
                array_push($arr, $Title, $Desc, $keys, $img);
                return $arr;
            case "contact":
                $Title = "Bizimlə Əlaqə";
                $Desc = "Əlaqə Nömrəsi: ".$CRUD->Select("nizamlamalar")["ofis"]." | Ünvan: ".$CRUD->Select("nizamlamalar")["unvan"];
                $keys = $CRUD->Select("nizamlamalar")["keywords"];
                array_push($arr, $Title, $Desc, $keys, $img);
                return $arr;
            case "service":
                $Title = "Xidmətlər";
                $Desc = strip_tags(mb_substr($CRUD->Select("services")["alt_basliq"], 0, 150)) . "...";
                array_push($arr, $Title, $Desc, $keys, $img);
                return $arr;
            case "blog":
                $Title = "Məqalələr";
                $Desc = "Meqalaler";
                array_push($arr, $Title, $Desc);
                return $arr;
            
        }

    }
}