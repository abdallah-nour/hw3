  <?php
  include_once("print_helpers.php");

  if (isset($_FILES["uploads"])) {
    $uploads = $_FILES["uploads"];
    $total = count($uploads['name']);
    println("Total uploaded files: $total");
    [$tmp_names, $names] = [$uploads["tmp_name"], $uploads["name"]];
    $data = array_combine($tmp_names, $names);
    printArray($data);
    foreach ($data as $temp => $name)
      move_uploaded_file($temp, "uploads\\" . $name);
  }
