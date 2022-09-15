<?php
date_default_timezone_set('Asia/Jakarta');

/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$ceklis = "{$abu2}[{$res}✓{$abu2}]{$green2}";

/*HARGAILAH KARYA DARI ORANG LAIN DENGAN TIDAK PLAGIAT/MENGAMBIL SOURCE CODE DAN MENGUBAH AUTHOR PEMBUAT KODE*/
$banner = "\r{$purple}
==========================================================
                  #                                       
                  ##                                      
 ####### ######## ###  ##   ###### ####### ####### #######
                  #### ##  ###     ##   ##       ##     ##
 #######  ####### #######  ###     ##   ##  ###  ##  #####
 ##       ###     ### ###  ###     ##   ##  ###  ##     ##
 ##       ####### ###  ##   ###### #######  ###### #######
\n{$green2}Auto Mining{$abu2} :{$res} (solidminer.io)
{$green2}Author{$abu2} :{$res} f3nc0de
{$green2}Telegram Group{$abu2} :{$res}https://t.me/termuxscriptyt
{$green2}Donate LTC{$abu2} :{$res}MHtde2emFgvebb2Sz8SSNkc5rq8TpFtvPu\n
{$red2}MOHON JANGAN UBAH KOLOM AUTHOR!
$purple==========================================================";
echo $banner;
echo "\n$pentung Login to your account please wait$pentung\n";
echo "===========================================================\n";
$date = date("h:i:sa");
sleep(5);

/*Requirements*/ 
$ua = array("user-agent: Mozilla/5.0 (Linux; Android 7.0; MI MAX) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.162 Mobile Safari/537.36");
$login = "https://solidminer.io/api.php";
$data = "action=_login&address=3AVR7pkc9pT5Pw6uvCgUJ9xvMK9VHrfZcX&password=200598&referrer=0";
$home = "https://solidminer.io/dashboard.php";

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $login);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a1 = explode('﻿{"return":1,"message":"Login successful"}', $result);
echo "$ceklis$yellow$a1[0] Berhasil Login...\n";
echo "===========================================================\n";
echo "Memulai Menuyul....\n";
sleep(5);
while (true){
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $home);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$b1 = explode('<span style="font-size:35px;color:#FFF;margin-bottom:20px;font-weight:bold" id="mining_run">', $result);
$b2 = explode('</span>', $b1[1]);
echo "\n$ceklis $date$yellow Success [Balance = $b2[0] BTC]";
sleep(1);
}
?>