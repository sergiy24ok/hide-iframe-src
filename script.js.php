<script type="text/javascript">
    $(function(){
    	<?php // base64_decode obfuscated function ?>
        var  _0x1207=["ABCDEFGHIJKLMNOP","QRSTUVWXYZabcdef","ghijklmnopqrstuv","wxyz0123456789+/","=","","exec","replace","charAt","indexOf","fromCharCode","length"], <?php echo $JSON ?> = JSON;var keyStr=_0x1207[0]+ _0x1207[1]+ _0x1207[2]+ _0x1207[3]+ _0x1207[4];function <?php echo $de_base64; ?>(_0x85c5x3){var _0x85c5x4=_0x1207[5];var _0x85c5x5,_0x85c5x6,_0x85c5x7=_0x1207[5];var _0x85c5x8,_0x85c5x9,_0x85c5xa,_0x85c5xb=_0x1207[5];var _0x85c5xc=0;var _0x85c5xd=/[^A-Za-z0-9\+\/\=]/g;if(_0x85c5xd[_0x1207[6]](_0x85c5x3)){};_0x85c5x3= _0x85c5x3[_0x1207[7]](/[^A-Za-z0-9\+\/\=]/g,_0x1207[5]);do{_0x85c5x8= keyStr[_0x1207[9]](_0x85c5x3[_0x1207[8]](_0x85c5xc++));_0x85c5x9= keyStr[_0x1207[9]](_0x85c5x3[_0x1207[8]](_0x85c5xc++));_0x85c5xa= keyStr[_0x1207[9]](_0x85c5x3[_0x1207[8]](_0x85c5xc++));_0x85c5xb= keyStr[_0x1207[9]](_0x85c5x3[_0x1207[8]](_0x85c5xc++));_0x85c5x5= (_0x85c5x8<< 2)| (_0x85c5x9>> 4);_0x85c5x6= ((_0x85c5x9& 15)<< 4)| (_0x85c5xa>> 2);_0x85c5x7= ((_0x85c5xa& 3)<< 6)| _0x85c5xb;_0x85c5x4= _0x85c5x4+ String[_0x1207[10]](_0x85c5x5);if(_0x85c5xa!= 64){_0x85c5x4= _0x85c5x4+ String[_0x1207[10]](_0x85c5x6)};if(_0x85c5xb!= 64){_0x85c5x4= _0x85c5x4+ String[_0x1207[10]](_0x85c5x7)};_0x85c5x5= _0x85c5x6= _0x85c5x7= _0x1207[5];_0x85c5x8= _0x85c5x9= _0x85c5xa= _0x85c5xb= _0x1207[5]}while(_0x85c5xc< _0x85c5x3[_0x1207[11]]);;return unescape(_0x85c5x4)}


        <?php
        	$fake_s = breakLink($link); $fakestring = encodeLink($fake_s);
        	
        	if (rand(1, 1000) %2 == 1) { echo "var _{$randomnames[1]} = \"$fakestring\";\n";} 

            $fake_s = breakLink($link); $fakestring = encodeLink($fake_s); 
            if (rand(1, 1000) %2 == 1) { echo "var _{$randomnames[2]} = \"$fakestring\";\n";}

            // this is our genuinte string 
            $good_string = encodeLink($link);
            echo "var _{$randomnames[0]} = \"$good_string\";\n";

            $fake_s = breakLink($link); $fakestring = encodeLink($fake_s); 
            if (rand(1, 1000) %2 == 1) { echo "var _{$randomnames[3]} = \"$fakestring\";\n";} 

            $fake_s = breakLink($link); $fakestring = encodeLink($fake_s); 
            if (rand(1, 1000) %2 == 1) { echo "var _{$randomnames[4]} = \"$fakestring\";\n";} 
        ?>


        <?php /* 
            Obfuscated:

	        $(function(){
	             document.getElementById('video').src = decode_base64(JSON.parse(decode_base64(johndoe)).join(''));
	        	
	        });

        */?>
        var _0xbbfb=["src","<?php echo $iframe_id; ?>","getElementById","","join","parse"];$(function(){document[_0xbbfb[2]](_0xbbfb[1])[_0xbbfb[0]]= <?php echo $de_base64; ?>(<?php echo $JSON; ?>[_0xbbfb[5]](<?php echo $de_base64; ?>(<?php echo "_{$randomnames[0]}"; ?>))[_0xbbfb[4]](_0xbbfb[3]))})

    }); 
</script>