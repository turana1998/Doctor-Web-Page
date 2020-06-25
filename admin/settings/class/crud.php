<?php


class CRUD
{


    public function Select($table, $multi = 0, $where = null, $arr = null, $column = "*")
    {
        global $db;
        $slc = $db->prepare("SELECT {$column} from {$table} {$where}");
        $slc->execute($arr);
        return $multi ? $slc->fetchAll(PDO::FETCH_ASSOC) : $slc->fetch(PDO::FETCH_ASSOC);
    }

    public function UPDATE($table, $colums = null, $where = null, $arr = null)
    {
        global $db;
        $upd = $db->prepare("UPDATE {$table} set {$colums} {$where}");
        $dys = $upd->execute($arr);
        return $dys ? 1 : 0;
    }
    public function INSERT($table, $colums = null, $arr = null)
    {
        global $db;
        $upd = $db->prepare("INSERT into {$table} set {$colums}");
        $dys = $upd->execute($arr);
        return $dys ? 1 : 0;
    }
    public function DELETE($table, $con)
    {
        global $db;
        $dlt = $db->prepare("DELETE from {$table} where id={$con}");
        return $dlt->execute() ? 1 : 0;
    }
    public function Search($table, $column, $data)
    {
        global $db;
        try {

            $sql = $db->prepare("SELECT * FROM {$table} WHERE {$column} LIKE :xyzsearchxyz ");
            $sql->execute(["xyzsearchxyz" => "%" . $data . "%"]);
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $th) {
            return ["sts" => 0];
        }
    }
}
