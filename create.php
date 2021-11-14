<?php
// ┌──────────────────────────────────────────────────────────────────────────────┐
// │ Author      : 3Vluzi                                                         │
// │ Description : Creating a SELECT OPTION on a shell file Using PHP             │
// │ URL         : https://izulthea.com                                           │
// │                                                                              │
// └──────────────────────────────────────────────────────────────────────────────┘
function loop($xx)
{
    $xx = preg_split('/(\r?\n)+/', $xx);
    $x = 0;
    $dd = '';
    foreach ($xx as $d[$x]) {
        $dd .= $d[$x] . ",";
        $x++;
    }
    return   explode(',', substr($dd, 0, -1));
}
$kolom = loop(trim($_POST['kolom']));
$isi_kolom = '';
$noy = 0;
foreach ($kolom as $d[$noy]) {
    $isi_kolom .= $d[$noy] . " ";
}
$perintah = '';
$p = 0;
foreach ($kolom as $d[$p]) {
    $perintah .= $d[$p] . ")<br>#Perintah<br>;;<br>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Generate Shell File Select Option</title>
</head>
<body>
    <div class="container p-3">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <!-- ---------------------------- konten utama 2021-11-14 jam  12:52:58.000-05:00 ----------------------------- -->
                    <div class="col-6">
                        <h3>Generator Text area to Loop </h3>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Nama masing-masing kolom</label>
                                <textarea name="kolom" placeholder="Nama kolom, isikan perbaris" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="sqlkan">Buatkan Kode</button>
                        </form>
                    </div>
                    <?php
                    if (isset($_POST['sqlkan'])) {
                        echo "/*--------------------------------- file.sh -------------------------------- */";
                        /* ------------------------------------ x ----------------------------------- */
                        $item = '
#!/bin/sh                        
KUNING="\033[1;33m"
NC="\033[0m" # No Color
clear
figlet -w $(tput cols) -c "3Vluzi"
uptime
echo -e "${KUNING}---------------------------------------\${NC}"
PS3="Select the operation: "
echo -e "${KUNING}---------------------------------------\${NC}"
select opt in ' . $isi_kolom . ' quit; do
case $opt in
' . $perintah . '
quit)
break
;;
*)
echo "Invalid option \$REPLY"
;;
esac
done
';
                        echo "<pre>" . $item . "</pre>";
                        /* ------------------------------------ x ----------------------------------- */
                    }
                    ?>
                    <!-- ---------------------------- konten utama  2021-11-14 jam 12:52:58.000-05:00----------------------------- -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
