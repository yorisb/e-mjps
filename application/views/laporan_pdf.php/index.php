<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <div class="col-lg">
        <div class="p-3 mb-2 bg-secondary text-white">
            <h5>Pre-Test</h5>
        </div>
        <div class="table table-hover">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nilai</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($name as $m) : ?>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $m['keterangan']; ?></td>
                        <td><?= $m['name']; ?></td>
                        <td><?= $m['nilai']; ?></td>
                        <td>
                            <a href="" class="badge bg-danger text-white">Delete</a>
                        </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

</body>

</html>