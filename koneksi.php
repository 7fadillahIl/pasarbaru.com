<?php
$konek = mysqli_connect("localhost", "root", "", "pasarbaru");

// Check connection
if (!$konek) {
	echo "koneksi error";
}
