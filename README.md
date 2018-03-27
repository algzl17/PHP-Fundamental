# Tugas 4 PHP-Fundamental

PHP Fundamental

## Tampilan Awal

![prev](https://github.com/algzl17/PHP-Fundamental/blob/master/view.png)

## Penjelasan
- Algoritma
 ```sh
  Algoritma LOGIN
  1. Langkah pertama mulai
  2. Isi username dan password
  3. Cek username dan password benar atau salah
  4. Jika benar, maka akan melanjutkan proses baca menu kemudian tampil user menu
  5. Jika salah, maka proses ini akan kembali ke proses 2, setiap proses login error session akan ditambah 1
  dan apabila proses masih salah akan diulang maksimal sebanyak 3x.
  Dan jika melebihi batas maksimal maka akun akan diblokir.
  6. Selesai.
 ```
- Pseudocode
 ```sh
  session_start()
  input user name dan password
  if ($username == $user && $password == $pass)
	$_SESSION['user'] = $username;
  else
  if isset($_SESSION[''block])
	$_SESSION['block']++;
  else
  	$_SESSION['block']=1;

  end.
  session_start();
  if $_SESSION["salah"] > 3;
  echo alert('Anda Diblokir') to.location ('error.php');
  }
 ```

- Flowchart

![flowchart](https://github.com/algzl17/PHP-Fundamental/blob/master/Flowchat/login.png)

## Tampilan Running Program

![1](https://github.com/algzl17/PHP-Fundamental/blob/master/SS/1.png)
![2](https://github.com/algzl17/PHP-Fundamental/blob/master/SS/2.png)
![3](https://github.com/algzl17/PHP-Fundamental/blob/master/SS/3.png)
![4](https://github.com/algzl17/PHP-Fundamental/blob/master/SS/4.png)
![5](https://github.com/algzl17/PHP-Fundamental/blob/master/SS/5.png)

