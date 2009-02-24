--TEST--
ffmpeg getFrame backwards test
--SKIPIF--
<?php 
extension_loaded('ffmpeg') or die("skip ffmpeg extension not loaded"); 
extension_loaded('gd') or die("skip gd extension not avaliable.");
function_exists("imagecreatetruecolor") or die("skip function imagecreatetruecolor unavailable");
?>
--FILE--
<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi');

$framecount = $mov->getFrameCount();
for($i = $framecount; $i > 0; $i--) {
    $img = sprintf("%s/test-%04d.png", dirname(__FILE__), $i);
    $frame = $mov->getFrame($i);
    $image = $frame->toGDImage();
    imagepng($image, $img);
    printf("ffmpeg getFramesBackward($i): md5 = %s\n", md5(file_get_contents($img)));
    imagedestroy($image);
    unlink($img);
}
?>
--EXPECT--
ffmpeg getFramesBackward(240): md5 = 7e80bfd9c95b8f46e4ffcc1acacd478d
ffmpeg getFramesBackward(239): md5 = 7e80bfd9c95b8f46e4ffcc1acacd478d
ffmpeg getFramesBackward(238): md5 = 7e80bfd9c95b8f46e4ffcc1acacd478d
ffmpeg getFramesBackward(237): md5 = 972e660b84a02fb883809c93f1ffdbf8
ffmpeg getFramesBackward(236): md5 = 972e660b84a02fb883809c93f1ffdbf8
ffmpeg getFramesBackward(235): md5 = 972e660b84a02fb883809c93f1ffdbf8
ffmpeg getFramesBackward(234): md5 = f513c73faf87cbfe1fff854d97f8f492
ffmpeg getFramesBackward(233): md5 = f513c73faf87cbfe1fff854d97f8f492
ffmpeg getFramesBackward(232): md5 = f513c73faf87cbfe1fff854d97f8f492
ffmpeg getFramesBackward(231): md5 = 92b0f153f17e6a387535ba873c245ef2
ffmpeg getFramesBackward(230): md5 = 92b0f153f17e6a387535ba873c245ef2
ffmpeg getFramesBackward(229): md5 = 92b0f153f17e6a387535ba873c245ef2
ffmpeg getFramesBackward(228): md5 = 03fe855c91fbaabe9e260a23ca4fa6cd
ffmpeg getFramesBackward(227): md5 = 03fe855c91fbaabe9e260a23ca4fa6cd
ffmpeg getFramesBackward(226): md5 = 03fe855c91fbaabe9e260a23ca4fa6cd
ffmpeg getFramesBackward(225): md5 = bb894534f0fbb93ae13effea4ae7778c
ffmpeg getFramesBackward(224): md5 = bb894534f0fbb93ae13effea4ae7778c
ffmpeg getFramesBackward(223): md5 = bb894534f0fbb93ae13effea4ae7778c
ffmpeg getFramesBackward(222): md5 = d60ad82118cc3d82d61380e8c1c35821
ffmpeg getFramesBackward(221): md5 = d60ad82118cc3d82d61380e8c1c35821
ffmpeg getFramesBackward(220): md5 = d60ad82118cc3d82d61380e8c1c35821
ffmpeg getFramesBackward(219): md5 = c9b92c3b3043cadf83b634aaa9967af2
ffmpeg getFramesBackward(218): md5 = c9b92c3b3043cadf83b634aaa9967af2
ffmpeg getFramesBackward(217): md5 = c9b92c3b3043cadf83b634aaa9967af2
ffmpeg getFramesBackward(216): md5 = 916130d3a9a0b5291dd80c3f905f3cfe
ffmpeg getFramesBackward(215): md5 = 916130d3a9a0b5291dd80c3f905f3cfe
ffmpeg getFramesBackward(214): md5 = 916130d3a9a0b5291dd80c3f905f3cfe
ffmpeg getFramesBackward(213): md5 = ccc8aa4b659a072ef3e94005e982e197
ffmpeg getFramesBackward(212): md5 = ccc8aa4b659a072ef3e94005e982e197
ffmpeg getFramesBackward(211): md5 = ccc8aa4b659a072ef3e94005e982e197
ffmpeg getFramesBackward(210): md5 = 10230400f9cdb8a4785082ed133f4c40
ffmpeg getFramesBackward(209): md5 = 10230400f9cdb8a4785082ed133f4c40
ffmpeg getFramesBackward(208): md5 = 10230400f9cdb8a4785082ed133f4c40
ffmpeg getFramesBackward(207): md5 = 3081db2af3ff5bc76f938f9b80ec72bb
ffmpeg getFramesBackward(206): md5 = 3081db2af3ff5bc76f938f9b80ec72bb
ffmpeg getFramesBackward(205): md5 = 3081db2af3ff5bc76f938f9b80ec72bb
ffmpeg getFramesBackward(204): md5 = c9584d3d2c2480fb480953e9bc317cb0
ffmpeg getFramesBackward(203): md5 = c9584d3d2c2480fb480953e9bc317cb0
ffmpeg getFramesBackward(202): md5 = c9584d3d2c2480fb480953e9bc317cb0
ffmpeg getFramesBackward(201): md5 = 35335bb3cbc1cb75aff8416a26df8f39
ffmpeg getFramesBackward(200): md5 = 35335bb3cbc1cb75aff8416a26df8f39
ffmpeg getFramesBackward(199): md5 = 35335bb3cbc1cb75aff8416a26df8f39
ffmpeg getFramesBackward(198): md5 = 6851e0793856841f31acc6a5f704650c
ffmpeg getFramesBackward(197): md5 = 6851e0793856841f31acc6a5f704650c
ffmpeg getFramesBackward(196): md5 = 6851e0793856841f31acc6a5f704650c
ffmpeg getFramesBackward(195): md5 = 5221475c9ea8970258feb9dab1392049
ffmpeg getFramesBackward(194): md5 = 5221475c9ea8970258feb9dab1392049
ffmpeg getFramesBackward(193): md5 = 5221475c9ea8970258feb9dab1392049
ffmpeg getFramesBackward(192): md5 = b900f912fbe898801a4c8356638dcf54
ffmpeg getFramesBackward(191): md5 = b900f912fbe898801a4c8356638dcf54
ffmpeg getFramesBackward(190): md5 = b900f912fbe898801a4c8356638dcf54
ffmpeg getFramesBackward(189): md5 = a53b0c4d2c023f1019b3190b35216c60
ffmpeg getFramesBackward(188): md5 = a53b0c4d2c023f1019b3190b35216c60
ffmpeg getFramesBackward(187): md5 = a53b0c4d2c023f1019b3190b35216c60
ffmpeg getFramesBackward(186): md5 = 965909c3829a19aa301ff7dc98f1ca90
ffmpeg getFramesBackward(185): md5 = 965909c3829a19aa301ff7dc98f1ca90
ffmpeg getFramesBackward(184): md5 = 965909c3829a19aa301ff7dc98f1ca90
ffmpeg getFramesBackward(183): md5 = 93bdda9b26422cf7791154d54667812e
ffmpeg getFramesBackward(182): md5 = 93bdda9b26422cf7791154d54667812e
ffmpeg getFramesBackward(181): md5 = 93bdda9b26422cf7791154d54667812e
ffmpeg getFramesBackward(180): md5 = 7def27ec8a2136e344b24b12337f3a0c
ffmpeg getFramesBackward(179): md5 = 7def27ec8a2136e344b24b12337f3a0c
ffmpeg getFramesBackward(178): md5 = 7def27ec8a2136e344b24b12337f3a0c
ffmpeg getFramesBackward(177): md5 = 50d636deb9cdca5c88842653d3e62463
ffmpeg getFramesBackward(176): md5 = 50d636deb9cdca5c88842653d3e62463
ffmpeg getFramesBackward(175): md5 = 50d636deb9cdca5c88842653d3e62463
ffmpeg getFramesBackward(174): md5 = a469093f43c0fdd6016ee5ef932b7ca4
ffmpeg getFramesBackward(173): md5 = a469093f43c0fdd6016ee5ef932b7ca4
ffmpeg getFramesBackward(172): md5 = a469093f43c0fdd6016ee5ef932b7ca4
ffmpeg getFramesBackward(171): md5 = bab883284018046ddfa2e638785615aa
ffmpeg getFramesBackward(170): md5 = bab883284018046ddfa2e638785615aa
ffmpeg getFramesBackward(169): md5 = bab883284018046ddfa2e638785615aa
ffmpeg getFramesBackward(168): md5 = c790f8cc0f715ca0ec31845c9ef7397a
ffmpeg getFramesBackward(167): md5 = c790f8cc0f715ca0ec31845c9ef7397a
ffmpeg getFramesBackward(166): md5 = c790f8cc0f715ca0ec31845c9ef7397a
ffmpeg getFramesBackward(165): md5 = fe0cdb9314d1628af56e6c3662deb24f
ffmpeg getFramesBackward(164): md5 = fe0cdb9314d1628af56e6c3662deb24f
ffmpeg getFramesBackward(163): md5 = fe0cdb9314d1628af56e6c3662deb24f
ffmpeg getFramesBackward(162): md5 = 254d01500e3ec7f6ae402747761c0a95
ffmpeg getFramesBackward(161): md5 = 254d01500e3ec7f6ae402747761c0a95
ffmpeg getFramesBackward(160): md5 = 254d01500e3ec7f6ae402747761c0a95
ffmpeg getFramesBackward(159): md5 = 7dee4d143138fce530917488cc337c8c
ffmpeg getFramesBackward(158): md5 = 7dee4d143138fce530917488cc337c8c
ffmpeg getFramesBackward(157): md5 = 7dee4d143138fce530917488cc337c8c
ffmpeg getFramesBackward(156): md5 = 7862bd022cc4e9c3976b2f4758e5cd30
ffmpeg getFramesBackward(155): md5 = 7862bd022cc4e9c3976b2f4758e5cd30
ffmpeg getFramesBackward(154): md5 = 7862bd022cc4e9c3976b2f4758e5cd30
ffmpeg getFramesBackward(153): md5 = cd42cff504053e23c5db378119a40b3f
ffmpeg getFramesBackward(152): md5 = cd42cff504053e23c5db378119a40b3f
ffmpeg getFramesBackward(151): md5 = cd42cff504053e23c5db378119a40b3f
ffmpeg getFramesBackward(150): md5 = c76afdadc9099d8bd173f0e08807ee3d
ffmpeg getFramesBackward(149): md5 = c76afdadc9099d8bd173f0e08807ee3d
ffmpeg getFramesBackward(148): md5 = c76afdadc9099d8bd173f0e08807ee3d
ffmpeg getFramesBackward(147): md5 = 31038504cc4c1e664de89c257b1fa1b0
ffmpeg getFramesBackward(146): md5 = 31038504cc4c1e664de89c257b1fa1b0
ffmpeg getFramesBackward(145): md5 = 31038504cc4c1e664de89c257b1fa1b0
ffmpeg getFramesBackward(144): md5 = 51a73cbaf315c9faf8263627455fd5d5
ffmpeg getFramesBackward(143): md5 = 51a73cbaf315c9faf8263627455fd5d5
ffmpeg getFramesBackward(142): md5 = 51a73cbaf315c9faf8263627455fd5d5
ffmpeg getFramesBackward(141): md5 = 814b8a64a6a08093b3a81063bffffed4
ffmpeg getFramesBackward(140): md5 = 814b8a64a6a08093b3a81063bffffed4
ffmpeg getFramesBackward(139): md5 = 814b8a64a6a08093b3a81063bffffed4
ffmpeg getFramesBackward(138): md5 = 948fd5fd379679006c2ca2ba3bc52048
ffmpeg getFramesBackward(137): md5 = 948fd5fd379679006c2ca2ba3bc52048
ffmpeg getFramesBackward(136): md5 = 948fd5fd379679006c2ca2ba3bc52048
ffmpeg getFramesBackward(135): md5 = 3445a37f0effaef1a9c4e788f5ce54e5
ffmpeg getFramesBackward(134): md5 = 3445a37f0effaef1a9c4e788f5ce54e5
ffmpeg getFramesBackward(133): md5 = 3445a37f0effaef1a9c4e788f5ce54e5
ffmpeg getFramesBackward(132): md5 = 3ead3c1a402a7e26ee248cd8f9c96647
ffmpeg getFramesBackward(131): md5 = 3ead3c1a402a7e26ee248cd8f9c96647
ffmpeg getFramesBackward(130): md5 = 3ead3c1a402a7e26ee248cd8f9c96647
ffmpeg getFramesBackward(129): md5 = ffdc385768b0b1fcbb9908c9c9bffe21
ffmpeg getFramesBackward(128): md5 = ffdc385768b0b1fcbb9908c9c9bffe21
ffmpeg getFramesBackward(127): md5 = ffdc385768b0b1fcbb9908c9c9bffe21
ffmpeg getFramesBackward(126): md5 = 36cbf250ecf8c5a5538bd0a5f2eb9333
ffmpeg getFramesBackward(125): md5 = 36cbf250ecf8c5a5538bd0a5f2eb9333
ffmpeg getFramesBackward(124): md5 = 36cbf250ecf8c5a5538bd0a5f2eb9333
ffmpeg getFramesBackward(123): md5 = 22caa03aaa35e0aed2f0a3d4a3375b24
ffmpeg getFramesBackward(122): md5 = 22caa03aaa35e0aed2f0a3d4a3375b24
ffmpeg getFramesBackward(121): md5 = 22caa03aaa35e0aed2f0a3d4a3375b24
ffmpeg getFramesBackward(120): md5 = 21f287b5f3334a7aaed0aeeb55230621
ffmpeg getFramesBackward(119): md5 = 21f287b5f3334a7aaed0aeeb55230621
ffmpeg getFramesBackward(118): md5 = 21f287b5f3334a7aaed0aeeb55230621
ffmpeg getFramesBackward(117): md5 = 80e13931ccc6ace3a5a7ae256e048a61
ffmpeg getFramesBackward(116): md5 = 80e13931ccc6ace3a5a7ae256e048a61
ffmpeg getFramesBackward(115): md5 = 80e13931ccc6ace3a5a7ae256e048a61
ffmpeg getFramesBackward(114): md5 = 5f9109436658f422ec1841247acf835e
ffmpeg getFramesBackward(113): md5 = 5f9109436658f422ec1841247acf835e
ffmpeg getFramesBackward(112): md5 = 5f9109436658f422ec1841247acf835e
ffmpeg getFramesBackward(111): md5 = 9e5e0b70bfc1c90f2c5092428bc384ee
ffmpeg getFramesBackward(110): md5 = 9e5e0b70bfc1c90f2c5092428bc384ee
ffmpeg getFramesBackward(109): md5 = 9e5e0b70bfc1c90f2c5092428bc384ee
ffmpeg getFramesBackward(108): md5 = 86f50526473282524be5c092f77950a5
ffmpeg getFramesBackward(107): md5 = 86f50526473282524be5c092f77950a5
ffmpeg getFramesBackward(106): md5 = 86f50526473282524be5c092f77950a5
ffmpeg getFramesBackward(105): md5 = 395b50b5c8615cdb4b905aa0b3b2e669
ffmpeg getFramesBackward(104): md5 = 395b50b5c8615cdb4b905aa0b3b2e669
ffmpeg getFramesBackward(103): md5 = 395b50b5c8615cdb4b905aa0b3b2e669
ffmpeg getFramesBackward(102): md5 = a98e967bbda4b6dcaa19fd52d9fdef12
ffmpeg getFramesBackward(101): md5 = a98e967bbda4b6dcaa19fd52d9fdef12
ffmpeg getFramesBackward(100): md5 = a98e967bbda4b6dcaa19fd52d9fdef12
ffmpeg getFramesBackward(99): md5 = c97ea8a480b98c52f8b726b811f9714d
ffmpeg getFramesBackward(98): md5 = c97ea8a480b98c52f8b726b811f9714d
ffmpeg getFramesBackward(97): md5 = c97ea8a480b98c52f8b726b811f9714d
ffmpeg getFramesBackward(96): md5 = c8ed36df36fb8cea156212a5d5952d33
ffmpeg getFramesBackward(95): md5 = c8ed36df36fb8cea156212a5d5952d33
ffmpeg getFramesBackward(94): md5 = c8ed36df36fb8cea156212a5d5952d33
ffmpeg getFramesBackward(93): md5 = afa2f0bab3ba2b34806b2a52aea98bce
ffmpeg getFramesBackward(92): md5 = afa2f0bab3ba2b34806b2a52aea98bce
ffmpeg getFramesBackward(91): md5 = afa2f0bab3ba2b34806b2a52aea98bce
ffmpeg getFramesBackward(90): md5 = 41b5423e725b29fdacc5ee40faa4776c
ffmpeg getFramesBackward(89): md5 = 41b5423e725b29fdacc5ee40faa4776c
ffmpeg getFramesBackward(88): md5 = 41b5423e725b29fdacc5ee40faa4776c
ffmpeg getFramesBackward(87): md5 = ceafeaf93812d8f5fd48f6fa242d5e36
ffmpeg getFramesBackward(86): md5 = ceafeaf93812d8f5fd48f6fa242d5e36
ffmpeg getFramesBackward(85): md5 = ceafeaf93812d8f5fd48f6fa242d5e36
ffmpeg getFramesBackward(84): md5 = 92ecabfab41f2715a05f3847e2484b60
ffmpeg getFramesBackward(83): md5 = 92ecabfab41f2715a05f3847e2484b60
ffmpeg getFramesBackward(82): md5 = 92ecabfab41f2715a05f3847e2484b60
ffmpeg getFramesBackward(81): md5 = 8004f62b065a0d55150220972821be96
ffmpeg getFramesBackward(80): md5 = 8004f62b065a0d55150220972821be96
ffmpeg getFramesBackward(79): md5 = 8004f62b065a0d55150220972821be96
ffmpeg getFramesBackward(78): md5 = d502f1afe81ec69de3222d3b56b3d516
ffmpeg getFramesBackward(77): md5 = d502f1afe81ec69de3222d3b56b3d516
ffmpeg getFramesBackward(76): md5 = d502f1afe81ec69de3222d3b56b3d516
ffmpeg getFramesBackward(75): md5 = 8c9cbc1183504e1d1fee262e83775e01
ffmpeg getFramesBackward(74): md5 = 8c9cbc1183504e1d1fee262e83775e01
ffmpeg getFramesBackward(73): md5 = 8c9cbc1183504e1d1fee262e83775e01
ffmpeg getFramesBackward(72): md5 = afe384b15e07ea544fa7a1cdada288c0
ffmpeg getFramesBackward(71): md5 = afe384b15e07ea544fa7a1cdada288c0
ffmpeg getFramesBackward(70): md5 = afe384b15e07ea544fa7a1cdada288c0
ffmpeg getFramesBackward(69): md5 = db77eae1c1395ba1c794ae1281d68868
ffmpeg getFramesBackward(68): md5 = db77eae1c1395ba1c794ae1281d68868
ffmpeg getFramesBackward(67): md5 = db77eae1c1395ba1c794ae1281d68868
ffmpeg getFramesBackward(66): md5 = 3b8248dcafbc02ecab8f5a3065e61f03
ffmpeg getFramesBackward(65): md5 = 3b8248dcafbc02ecab8f5a3065e61f03
ffmpeg getFramesBackward(64): md5 = 3b8248dcafbc02ecab8f5a3065e61f03
ffmpeg getFramesBackward(63): md5 = 86d1330ec92bb2c672db8cfacef7c128
ffmpeg getFramesBackward(62): md5 = 86d1330ec92bb2c672db8cfacef7c128
ffmpeg getFramesBackward(61): md5 = 86d1330ec92bb2c672db8cfacef7c128
ffmpeg getFramesBackward(60): md5 = 954c1013975c1fc29ab8bbaf9208069a
ffmpeg getFramesBackward(59): md5 = 954c1013975c1fc29ab8bbaf9208069a
ffmpeg getFramesBackward(58): md5 = 954c1013975c1fc29ab8bbaf9208069a
ffmpeg getFramesBackward(57): md5 = 1c72b33fd6f829b293a83acd9dd6ba3e
ffmpeg getFramesBackward(56): md5 = 1c72b33fd6f829b293a83acd9dd6ba3e
ffmpeg getFramesBackward(55): md5 = 1c72b33fd6f829b293a83acd9dd6ba3e
ffmpeg getFramesBackward(54): md5 = e256491e34893b935d9a3839536d2587
ffmpeg getFramesBackward(53): md5 = e256491e34893b935d9a3839536d2587
ffmpeg getFramesBackward(52): md5 = e256491e34893b935d9a3839536d2587
ffmpeg getFramesBackward(51): md5 = ac35fe74cc8150970d6b8d6b6615ee7d
ffmpeg getFramesBackward(50): md5 = ac35fe74cc8150970d6b8d6b6615ee7d
ffmpeg getFramesBackward(49): md5 = ac35fe74cc8150970d6b8d6b6615ee7d
ffmpeg getFramesBackward(48): md5 = 9d6241b89b0320d045c81564ae392df1
ffmpeg getFramesBackward(47): md5 = 9d6241b89b0320d045c81564ae392df1
ffmpeg getFramesBackward(46): md5 = 9d6241b89b0320d045c81564ae392df1
ffmpeg getFramesBackward(45): md5 = 1560e32dc970140780155a3b9b8a5458
ffmpeg getFramesBackward(44): md5 = 1560e32dc970140780155a3b9b8a5458
ffmpeg getFramesBackward(43): md5 = 1560e32dc970140780155a3b9b8a5458
ffmpeg getFramesBackward(42): md5 = b8ae52b0bd25ff1ccddfffd61c2aee5a
ffmpeg getFramesBackward(41): md5 = b8ae52b0bd25ff1ccddfffd61c2aee5a
ffmpeg getFramesBackward(40): md5 = b8ae52b0bd25ff1ccddfffd61c2aee5a
ffmpeg getFramesBackward(39): md5 = ae68f48c14a76e4dc2f9c7f2183c7787
ffmpeg getFramesBackward(38): md5 = ae68f48c14a76e4dc2f9c7f2183c7787
ffmpeg getFramesBackward(37): md5 = ae68f48c14a76e4dc2f9c7f2183c7787
ffmpeg getFramesBackward(36): md5 = f614e07399921150044dfdaf880afa17
ffmpeg getFramesBackward(35): md5 = f614e07399921150044dfdaf880afa17
ffmpeg getFramesBackward(34): md5 = f614e07399921150044dfdaf880afa17
ffmpeg getFramesBackward(33): md5 = 30f0dff87230a9f3b1ebdc08b40aa0a7
ffmpeg getFramesBackward(32): md5 = 30f0dff87230a9f3b1ebdc08b40aa0a7
ffmpeg getFramesBackward(31): md5 = 30f0dff87230a9f3b1ebdc08b40aa0a7
ffmpeg getFramesBackward(30): md5 = 0f54b4e8a9e3cbbc6c5e1729f4793b2f
ffmpeg getFramesBackward(29): md5 = 0f54b4e8a9e3cbbc6c5e1729f4793b2f
ffmpeg getFramesBackward(28): md5 = 0f54b4e8a9e3cbbc6c5e1729f4793b2f
ffmpeg getFramesBackward(27): md5 = c9ec47e51edb4a58c1c76a2202d7147f
ffmpeg getFramesBackward(26): md5 = c9ec47e51edb4a58c1c76a2202d7147f
ffmpeg getFramesBackward(25): md5 = c9ec47e51edb4a58c1c76a2202d7147f
ffmpeg getFramesBackward(24): md5 = 74c553e7c88fd2479610cd2093d75717
ffmpeg getFramesBackward(23): md5 = 74c553e7c88fd2479610cd2093d75717
ffmpeg getFramesBackward(22): md5 = 74c553e7c88fd2479610cd2093d75717
ffmpeg getFramesBackward(21): md5 = 3411d97fd52b27b7105a4cf91a7b181e
ffmpeg getFramesBackward(20): md5 = 3411d97fd52b27b7105a4cf91a7b181e
ffmpeg getFramesBackward(19): md5 = 3411d97fd52b27b7105a4cf91a7b181e
ffmpeg getFramesBackward(18): md5 = 337873cd3a4b8529dae4da4aac38874c
ffmpeg getFramesBackward(17): md5 = 337873cd3a4b8529dae4da4aac38874c
ffmpeg getFramesBackward(16): md5 = 337873cd3a4b8529dae4da4aac38874c
ffmpeg getFramesBackward(15): md5 = 5415f831017e32afa73e5ceb32344f4d
ffmpeg getFramesBackward(14): md5 = 5415f831017e32afa73e5ceb32344f4d
ffmpeg getFramesBackward(13): md5 = 5415f831017e32afa73e5ceb32344f4d
ffmpeg getFramesBackward(12): md5 = 966a1fb1d649d8fdc6552ce6fa0e735f
ffmpeg getFramesBackward(11): md5 = 966a1fb1d649d8fdc6552ce6fa0e735f
ffmpeg getFramesBackward(10): md5 = 966a1fb1d649d8fdc6552ce6fa0e735f
ffmpeg getFramesBackward(9): md5 = 157cf8c54851ee90bda8b2398b077c28
ffmpeg getFramesBackward(8): md5 = 157cf8c54851ee90bda8b2398b077c28
ffmpeg getFramesBackward(7): md5 = 157cf8c54851ee90bda8b2398b077c28
ffmpeg getFramesBackward(6): md5 = 9770f3afe55297ea35c9f06a0e4334ea
ffmpeg getFramesBackward(5): md5 = 9770f3afe55297ea35c9f06a0e4334ea
ffmpeg getFramesBackward(4): md5 = 9770f3afe55297ea35c9f06a0e4334ea
ffmpeg getFramesBackward(3): md5 = abdf9f281de68cef4b77a5a7a899b60a
ffmpeg getFramesBackward(2): md5 = abdf9f281de68cef4b77a5a7a899b60a
ffmpeg getFramesBackward(1): md5 = abdf9f281de68cef4b77a5a7a899b60a
