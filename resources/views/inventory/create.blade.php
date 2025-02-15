<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="d-flex align-items-center" style="height: 100vh">
      <div
        class="container border gap-2 d-flex flex-column px-4 py-3 rounded col-sm-6"
      >
        <div class="row">
          <button class="btn btn-primary col-2 p-0">Back</button>
        </div>
        <div class="row">
          <span class="col">Category</span>
          <select class="col border rounded">
            <option value="n/a">- Select -</option>
            <option value="category_a">Category A</option>
            <option value="category_b">Category B</option>
            <option value="category_c">Category C</option>
          </select>
        </div>
        <div class="row">
          <span class="col">Item name</span>
          <input class="col border rounded" type="text" name="" id="" />
        </div>
        <div class="row">
          <span class="col">Price</span>
          <input class="col border rounded" type="text" name="" id="" />
        </div>
        <div class="row">
          <span class="col">Qty</span>
          <input class="col border rounded" type="text" name="" id="" />
        </div>
        <div class="row mt-4">
          <button class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </body>
</html>
