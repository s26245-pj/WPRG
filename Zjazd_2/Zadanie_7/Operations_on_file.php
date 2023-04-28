<?php

$path = $_POST['path'];
$directory = $_POST['directory'];
$operation = isset($_POST['operation']) ? $_POST['operation'] : 'read';

function handle_directory($path, $directory, $operation) {
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

    $full_path = $path . $directory;

    switch ($operation) {
        case 'read':
            if (!is_dir($full_path)) {
                echo 'Directory does not exist.';
                return;
            }

            $files = scandir($full_path);
            echo '<ul>';
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    echo '<li>' . $file . '</li>';
                }
            }
            echo '</ul>';
            break;

        case 'delete':
            if (!is_dir($full_path)) {
                echo 'Directory does not exist.';
                return;
            }

            if (!is_dir_empty($full_path)) {
                echo 'Directory is not empty.';
                return;
            }

            if (!rmdir($full_path)) {
                echo 'Failed to delete directory.';
                return;
            }

            echo 'Directory deleted.';
            break;

        case 'create':
            if (is_dir($full_path)) {
                echo 'Directory already exists.';
                return;
            }

            if (!mkdir($full_path, 0777, true)) {
                echo 'Failed to create directory.';
                return;
            }

            echo 'Directory Created.';
            break;

        default:
            echo 'Unknown operation.';
            break;
    }
}

function is_dir_empty($dir) {
    if (!is_readable($dir)) {
        return null;
    }

    $handle = opendir($dir);
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            closedir($handle);
            return false;
        }
    }
    closedir($handle);
    return true;
}

handle_directory($path, $directory, $operation);

