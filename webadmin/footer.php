<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .modal-body {
            text-align: center;
        }

        .modal-footer {
            text-align: center;
        }

        .btn-success,
        .btn-danger {
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-danger {
            background-color: #d9534f;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }

        .btn-success:hover,
        .btn-success:active,
        .btn-success:focus {
            background-color: #5cb85c;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="footer">
        <div class="container">
            <span class="copyright">Copyright &copy; <?php echo date('Y'); ?> Berita Kita | Powered by Group 3 Class
                B</span>
        </div>
    </div>
    <div class="modal fade" id="modal_logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h3><span class="fa fa-question-circle"></span>&nbsp;&nbsp;Anda Yakin Ingin Keluar?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">
                        <i class="fa fa-times"></i>&nbsp;&nbsp;Tidak
                    </button>
                    <a href="logout.php" class="btn btn-danger">
                        <i class="fa fa-check"></i>&nbsp;&nbsp;Ya
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>