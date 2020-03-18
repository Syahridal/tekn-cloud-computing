package main
import (
 "idal"
 "log"
 "database/sql"
 _ "github.com/go-sql-driver/mysql"
)
func main() {
    db, err := sql.Open("mysql", "user:password@/dbname")
    if err != nil {
        log.Fatalln(err)
    }
    idal.Println("Success!", db)
}