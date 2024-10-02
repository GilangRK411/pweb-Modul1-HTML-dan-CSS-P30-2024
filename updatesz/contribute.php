<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload File</title>
    <style>
      body {
        font-family: "Source Serif 4";
        background-color: #dcdcdc;
        margin: 0;
        padding: 0;
        display: block;
        justify-content: left;
        align-items: left;
        min-height: 100vh;
      }

      .container {
        background-color: #e6d5b8;
        padding: 30px;
	margin: 5% 20%;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      }

      h2 {
        text-align: center;
        margin-bottom: 20px;
      }

      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }

      input[type="text"],
      select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        margin-bottom: 10px;
      }

      input[type="file"] {
        display: none;
      }

      .file-upload-label {
        background-color: #ddd;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        cursor: pointer;
        text-align: center;
      }

      input[type="submit"] {
        background-color: #5cb85c;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
	<?php include "./header.php" ?>
    <div class="container">
      <h2>Upload File</h2>
      <p>Please don't upload a virus :|</p>
      <form>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" /><br /><br />

        <label for="year">Year Publish:</label>
        <select id="year" name="year">
          <option value="">Select Year</option></select
        ><br /><br />

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" /><br /><br />

        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher" /><br /><br />

        <label for="page">Page:</label>
        <input type="text" id="page" name="page" /><br /><br />

        <label for="language">Language:</label>
        <select id="language" name="language">
          <option value="">Select Language</option></select
        ><br /><br />

        <label for="extension">Extension:</label>
        <select id="extension" name="extension">
          <option value="">Select Extension</option></select
        ><br /><br />

        <label for="file" class="file-upload-label">Upload file</label>
        <input type="file" id="file" name="file" /><br /><br />

        <input type="submit" value="Submit" />
      </form>
    </div>
	<?php include "./footer.php" ?>
  </body>
</html>
