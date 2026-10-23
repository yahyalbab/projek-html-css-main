<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Aplikasi Penggajian</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');

* {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    margin: 0;
    min-height: 100vh;
    background:
        linear-gradient(
            rgba(255,255,255,0.65),
            rgba(255,255,255,0.65)
        ),
        url("https://penelitianpariwisata.id/wp-content/uploads/2023/03/PARIWISATA_DESTINASI_shutterstock_1302574123_Fabio_Lamanna_e17b095c8f.jpg");
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
}

.glass {
    width: 520px;
    padding: 35px;
    border-radius: 20px;
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(12px);
    box-shadow: 0 30px 60px rgba(0,0,0,0.12);
}

.header {
    text-align: center;
    margin-bottom: 30px;
}

.header h2 {
    margin: 0;
    font-weight: 500;
    letter-spacing: 1px;
    color: #2f3e46;
}

.header p {
    margin-top: 6px;
    font-size: 12px;
    color: #7a8b8b;
    letter-spacing: 1.5px;
}

table {
    width: 100%;
}

td {
    padding: 10px 0;
    font-size: 14px;
    color: #3a4a4a;
}

td:first-child {
    width: 35%;
}

input[type="text"],
select {
    width: 100%;
    padding: 10px 14px;
    border-radius: 14px;
    border: none;
    background: #f5f7f6;
    font-size: 13px;
    color: #333;
    outline: none;
    transition: 0.3s;
}

input[type="text"]:focus,
select:focus {
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(163,193,173,0.35);
}

.radio-group {
    display: flex;
    gap: 18px;
    font-size: 13px;
}

.hint {
    font-size: 11px;
    color: #9aa9a9;
    margin-top: 4px;
}

.buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

button {
    padding: 10px 26px;
    border-radius: 30px;
    border: none;
    cursor: pointer;
    font-size: 12px;
    letter-spacing: 1.5px;
    transition: 0.3s;
}

.btn-reset {
    background: transparent;
    color: #7a8b8b;
}

.btn-reset:hover {
    background: rgba(0,0,0,0.05);
}

.btn-submit {
    background: #a3c1ad;
    color: #fff;
    box-shadow: 0 10px 20px rgba(163,193,173,0.4);
}

.btn-submit:hover {
    background: #8eb39a;
}

.back {
    text-align: center;
    margin-top: 18px;
}

.back a {
    text-decoration: none;
    font-size: 12px;
    color: #6b7c7c;
}

.back a:hover {
    text-decoration: underline;
}
</style>
</head>

<body>

<form method="post" action="proses.php">
    <div class="glass">

        <div class="header">
            <h2>Entry Data Penggajian</h2>
            <p>payroll system</p>
        </div>

        <table>
            <tr>
                <td>NIP</td>
                <td>
                    <input type="text" name="nip">
                    <div class="hint">maks. 6 karakter</div>
                </td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>

            <tr>
                <td>Bulan & Tahun</td>
                <td>
                    <input type="text" name="blnthn" placeholder="MMYYYY">
                </td>
            </tr>

            <tr>
                <td>Status</td>
                <td class="radio-group">
                    <label><input type="radio" name="status" checked> Menikah</label>
                    <label><input type="radio" name="status"> Belum Menikah</label>
                </td>
            </tr>

            <tr>
                <td>Pinjaman</td>
                <td>
                    <input type="text" name="Pinjaman">
                    <div class="hint">kasbon</div>
                </td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan">
                        <option>Direktur</option>
                        <option>Sekretaris</option>
                        <option>Manager</option>
                        <option>Keuangan</option>
                        <option>Staff</option>
                        <option>OB</option>
                    </select>
                </td>
            </tr>
        </table>

        <div class="buttons">
            <button type="reset" class="btn-reset">ULANG</button>
            <button type="submit" class="btn-submit">SIMPAN</button>
        </div>

    </div>
</form>

<div class="back">
    <a href="http://127.0.0.1/TK_2/menuaplikasi.php">← kembali ke menu</a>
</div>

</body>
</html>
