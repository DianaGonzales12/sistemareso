<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">CONTENIDO PRINCIPAL</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Nuevo</a>
                    </div>
   

                    <style>
        .sidebar {
            height: 100vh;
            background-color: #4e73df;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
        }
        .sidebar .active {
            background-color: #2e59d9;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>


                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Area</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Aquí puedes usar datos dinámicos desde tu base de datos
                        $usuarios = [
                            ['id' => 1, 'nombre' => 'María', 'Area' => 'Residuos Solidos'],
                            ['id' => 2, 'nombre' => 'Pedro', 'Area' => 'Residuos Solidos'],
                            ['id' => 3, 'nombre' => 'Carlos', 'Area' => 'Residuos Solidos'],
                            ['id' => 4, 'nombre' => 'Ana', 'Area' => 'Residuos Solidos'],
                            ['id' => 5, 'nombre' => 'Jazmin', 'Area' => 'Residuos Solidos',]
                        ];

                        foreach ($usuarios as $usuario) {
                            echo "<tr>
                                    <td>{$usuario['id']}</td>
                                    <td>{$usuario['nombre']}</td>
                                    <td>{$usuario['Area']}</td>

                                    <td>
                                        <button class='btn btn-primary'>Editar</button>
                                        <button class='btn btn-danger'>Borrar</button>
                                    </td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                        </div>
                    </div>
<?= $this->endSection() ?>