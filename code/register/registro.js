
function loginDirect() {
    window.location.href = "/code/login/login.html";
}


var db = openDatabase("SesasDB", "1.0", "Mybase", 4048);

db.transaction(function (criar) {
    criar.executeSql("CREATE TABLE users (id PRIMARY KEY, email TEXT, senha TEXT");
});
