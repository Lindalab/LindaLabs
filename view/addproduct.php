
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">

  
</head>



<body>

<form>
<select name="mybrand" id="brand">
  <option value="1">B1</option>
  <option value="1">B2</option>
  <option value="1">B3</option>
 
</select>

<select name="mycat" id="cat">
  <option value="volvo">C1</option>
  <option value="saab">C2</option>
  <option value="mercedes">C3</option>
  
</select>

<input type="text" name="ptitle" id="ptitle">
<input type="text" name="pprice" id="pprice">
<input type="text" name="pdesc" id="pdesc">
<input type="text" name="pkeyword" id="pkeyword">

<input type="submit" name="submit" id="addsubmit" onclick="callmeajax()">
</form>

    
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

<script type="text/javascript">
    function callmeajax(){
        // stop the default action of forms
        event.preventDefault();

        

        //getting form data
        let brand=document.getElementById('brand').value;
        let cat=document.getElementById('cat');
        let pname=document.getElementById('ptitle').value;
        let pprice=document.getElementById('pprice').value;
        let pdesc=document.getElementById('pdesc').value;
        alert(brand);
        

        //send data for processing

    }
</script>