<?php include 'form.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario</title>
</head>

<main>
    <h1>Formulario</h1>
    <div class="formStyle">
        <form action="index.php" method="POST">
            <label for="name">Nombre:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="lastname">Primer Apellido:</label><br>
            <input type="text" id="lastname" name="lastname"><br>
            <input type="submit" value="Enviar" name="submit">
        </form>
    </div>

    <?php if ($response): ?>
        <p><?php echo htmlspecialchars($response); ?></p>
    <?php endif; ?>

    <section>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <?php if ($table_query && $table_query->rowCount() > 0): ?>
                <h2>Tabla</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $table_query->fetch(PDO::FETCH_ASSOC)): ?>
                            <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['lastname']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No hay datos guardados.</p>
            <?php endif; ?>
            <?php endif; ?>
        </section>
</main>
</html>