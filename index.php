<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Data With Fetch</title>
</head>

<body>
    <div>
        <input id="nbre1" name="nbre1" type="number">
        <input id="nbre2" name="nbre2" type="number">
        <button id="send">Send</button>
        <span id="name"></span>
    </div>

    <?php
    // outputs the username that owns the running php/httpd process
    // (on a system with the "whoami" executable in the path)
    // $output = null;
    // $retval = null;
    $checkUpdate = [];
    $checkUpdateStatus = null;
    exec('git remote update',$checkUpdate,$checkUpdateStatus,);
    if(count($checkUpdate) > 1 )
    {
        exec('git status -uno',$checkPullRequest,$checkPullStatus);
        // if($checkPullRequest[$i] === "")
        // {
        //     exec('git pull', $output, $retval);
        //     // echo "Returned with status $retval and output:\n";
        //     echo "Status: $checkUpdateStatus";
            print_r($checkPullRequest);
        // }

    }else
    {
        echo "<h3>Nothing to update</h3>";
    }

    ?>


    <script>
        const fetchData = async () => {
            const response = await fetch('http://fetch_data.test/api.json');
            const data = response.json();
            return data;
        }



        // console.log(data);
        document.querySelector('#send').addEventListener('click', (e) => {
            e.preventDefault();
            fetchData()
                .then(data => {
                    document.querySelector('#name').append(data['2']['nom'])
                })
                .catch(error => console.log(error));
        });




        // form = new FormData();
        // document.querySelector('#send').addEventListener('click', event => {
        //     val = document.querySelector('#nbre1').value;
        //     val1 = document.querySelector('#nbre2').value
        //     fetch('http://fetch_data.test/api.json', {
        //             method: 'POST',
        //             body: form,
        //             headers: {
        //                 'Content-type': 'application/json;charset=UTF-8'
        //             }
        //         })
        //         .then(function(response) {
        //             if (response.ok) {
        //                 return response.json
        //             }

        //             return Promise.reject(response);
        //         })
        //         .then(function(data) {
        //             console.log(data);
        //         })
        //         .catch(function(err) {
        //             console.warn('Quelque chose s\'est mal pass??')
        //         });

        // });
    </script>
</body>

</html>