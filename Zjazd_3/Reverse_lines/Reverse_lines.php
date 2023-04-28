<?php
if (isset($_FILES['file'])) {
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {

        $filename = $_FILES['file']['name'];
        $file = $_FILES['file']['tmp_name'];
        $new_file = dirname(__FILE__) . '/' . $filename;


        $file_contents = file($file);
        $file_contents = array_reverse($file_contents);

        file_put_contents($new_file, implode('', $file_contents));

        // wyświetlenie informacji o zakończeniu przetwarzania pliku
        echo 'Lines have been reversed and file saved in: ' . $new_file;
    }
} else {

    echo '<form action="" method="post" enctype="multipart/form-data">
              <input type="file" name="file" />
              <input type="submit" value="Reverse lines in file" />
          </form>';
}
