<h1>Data Barang</h1>
<table border="1">
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data['barang'] as $barang) : ?>
        <tr>
            <td><?= $barang['nama_barang']; ?></td>
            <td><?= $barang['harga']; ?></td>
            <td><?= $barang['stok']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>