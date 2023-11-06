<?php

namespace app\Models;

use \PDO;

if (file_exists(__DIR__ . "/../../config/server.php")) {
    require_once __DIR__ . "/../../config/server.php";
}
class mainModel
{
    private $server = DB_SERVER;
    private $db = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASSWORD;

    protected function connection()
    {
        $connection = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->db, $this->user, $this->pass);
        $connection->exec("SET  CHARACTER SET utf8");
        return $connection;
    }
    protected function execConsult($consult)
    {
        $sql = $this->connection()->prepare($consult);
        $sql->execute();
        return $sql;
    }
    public function clearChain($chain)
    {

        $words = [
            "<script>", "</script>", "<script src>", "<script type=", "SELECT*FROM", "DELETE FROM", "INSERT INTO",
            "DROP TABLE", "DROP DATABASE", "TRUNCATE TABLE", "SHOW DATABASES", "SHOW TABLES", "<?php", "?>", "--", "^", "<", ">", "==", "=", ";", "::"
        ];
        $chain = trim($chain);
        $chain = stripslashes($chain);

        foreach ($words as $word) {
            $chain = str_ireplace($word, "", $chain);
        }
        $chain = trim($chain);
        $chain = stripslashes($chain);
        return $chain;
    }
    protected function verifiedData($filter, $chain)
    {
        if (preg_match("/^" . $filter . "$/", $chain)) {
            return false;
        } else {
            return true;
        }
    }
    protected function saveData($table, $data)
    {
        $query = "INSERT INTO $table (";
        $counter = 0;
        foreach ($data as $clue) {
            if ($counter >= 1) {
                $query .= ",";
            }
            $query .= $clue["field_name"];
            $counter++;
        }
        $query .= ") VALUES (";

        $counter = 0;
        foreach ($data as $clue) {
            if ($counter >= 1) {
                $query .= ",";
            }
            $query .= $clue["field_marker"];
            $counter++;
        }
        $query .= ")";
        $sql = $this->connection()->prepare($query);

        foreach ($data as $clue) {
            $sql->bindParam($clue["field_marker"], $clue["field_value"]);
        }
        $sql->execute();
        return $sql;
    }
    public function selectData($type, $table, $field, $id)
    {
        $type = $this->clearChain($type);
        $table = $this->clearChain($table);
        $field = $this->clearChain($field);
        $id = $this->clearChain($id);

        if ($type == "Unique") {
            $sql = $this->connection()->prepare("SELECT * FROM $table WHERE $field=:ID");
            $sql->bindParam(":ID", $id);
        } else if ($type == "Normal") {
            $sql = $this->connection()->prepare("SELECT $field FROM $table");
        }
        $sql->execute();
        return $sql;
    }
    protected function updateData($table, $data, $condition)
    {
        $query = "UPDATE $table SET ";
        $counter = 0;
        foreach ($data as $clue) {
            if ($counter >= 1) {
                $query .= ",";
            }
            $query .= $clue["field_name"] . "=" . $clue["field_marker"];
            $counter++;
        }
        $query .= " WHERE " . $condition["condition_field"] . "=" . $condition["condition_marker"];
        $sql = $this->connection()->prepare($query);

        foreach ($data as $clue) {
            $sql->bindParam($clue["field_marker"], $clue["field_value"]);
        }
        $sql->bindParam($condition["condition_marker"], $condition["condition_value"]);
        $sql->execute();
        return $sql;
    }
    protected function deleteRegister($table, $field, $id)
    {
        $sql = $this->connection()->prepare("DELETE FROM $table WHERE $field=:ID");
        $sql->bindParam(":ID", $id);
        $sql->execute();
        return $sql;
    }
    protected function paginationTables($page, $numberPages, $url, $buttons)
    {
        $table = '<nav class="pagination is-centered" role="navigation" aria-label="pagination">';
        if ($page <= 1) {
            $table .= '
            <a class="pagination-previous is-disabled" disabled>Previous</a>
             <ul class="pagination-list">
            ';
        } else {
            $table .= '
              <a class="pagination-previous" href="' . $url . ($page - 1) . '/ ">Previous</a>
              <ul class="pagination-list">
                <li><a class="pagination-link" aria-label="Goto page 1" href="' . $url . '1/">1</a></li>
                <li><span class="pagination-ellipsis">&hellip;</span></li>
            ';
        }
        $counter = 0;
        for ($i = $page; $i <= $numberPages; $i++) {
            if ($counter >= $buttons) {
                break;
            }
            if ($page == $i) {
                $table .= '<li><a class="pagination-link is-current"  aria-current="page" href="' . $url . $i . '/ ">' . $i . '</a></li>';
            } else {
                $table .= '<li><a class="pagination-link"  aria-current="page" href="' . $url . $i . '/ ">' . $i . '</a></li>';
            }
            $counter++;
        }
        if ($page == $numberPages) {
            $table .= '
                </ul>
                <a class="pagination-next is-disabled" disabled>Next page</a>
            ';
        } else {
            $table .= '
                <li><span class="pagination-ellipsis">&hellip;</span></li>
                <a class="pagination-link" href="' . $url . $numberPages . '/"></a>
                </ul>
                <a class="pagination-next" href="' . $url . ($page + 1) . ' / ">Next page</a>
            ';
        }
        $table .= '</nav>';
        return $table;
    }
}
