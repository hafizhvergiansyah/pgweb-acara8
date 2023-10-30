<!DOCTYPE html>
<html>
<body>
<h2>Form Input</h2>
<form action="input.php" onsubmit="return validateForm()" method="post">
 <label for="kecamatan">Kecamatan:</label><br>
 <input type="text" id="kecamatan" name="kecamatan" value=""><br>
 <label for="luas">Luas:</label><br>
 <input type="text" id="luas" name="luas" value=""><br>
 <label for="jumlah_penduduk">Jumlah Penduduk:</label><br>
 <input type="text" id="jumlah_penduduk" name="jumlah_penduduk" value=""><br>
 <label for="longitude">longitude:</label><br>
 <input type="text" id="longitude" name="longitude" value=""><br>
 <label for="latitude">latitude:</label><br>
 <input type="text" id="latitude" name="latitude" value=""><br>
 <input type="submit" value="Submit">
</form>
<p id="informasi"></p>
<script>
function validateForm() {

 let luas = document.getElementById("luas").value;
 let text="";
 if (isNaN(luas) || luas < 1) {
text = "Data luas harus angka dan tidak boleh bernilai negatif";
// stop the form submission
event.preventDefault();
 }
 document.getElementById("informasi").innerHTML = text;
}
</script>
</body>
</html>