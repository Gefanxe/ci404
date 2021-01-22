<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function frmPost(f) {
            let dataObject = Object.fromEntries(new FormData(f));

            fetch('/ex/save', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', "X-Requested-With": "XMLHttpRequest" },
                body: JSON.stringify(dataObject),
            }).then(res => {
                return res.json();
            }).then(res => {
                console.log('status:', res);
            });
            return false;
        }
    </script>
</head>

<body>
    <form name="regisForm" method="post" onsubmit="return frmPost(this)">
        <fieldset>
            <legend>註冊表單</legend>
            <p>
                <label for="account">帳號:</label>
                <input type="text" name="account" id="account" value="actspace">
            </p>
            <p>
                <label for="password">密碼:</label>
                <input type="password" name="password" id="password" value="oiceuthn">
            </p>
            <p>
                <label for="pass_confirm">重複密碼:</label>
                <input type="password" name="pass_confirm" id="pass_confirm" value="oiceuthn">
            </p>
            <p>
                <label for="name">名稱:</label>
                <input type="text" name="name" id="name" value="actspace">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="actfire@gmail.com">
            </p>
            <p>
                <input type="submit" value="送出">
            </p>
        </fieldset>
    </form>
</body>

</html>