<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once("getData.php");
    
    ?>
    <header class="header clearfix">
    <div class="logo"><img src="yilogo.png" while="200px" height="120px" alt="YIlogo"></div>
        <div class="content">
            <div class="name">
                 ようこそ
                    <?php
                        $name = new getData();
                        $users_data = $name->getUserData();
                        echo  $users_data["last_name"].$users_data["first_name"] ;
                        ?>
                    さん
            </div>
            <div class="data">
                <?php 
                echo '最終ログイン日：'.$users_data['last_login'];
                ?>
                
            </div>
        </div>
    </header>

    <div class="main">
        <?php
        $post_data = $name->getPostData();
        ?>
        <table>
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>

            </tr>
            
            <?php
            foreach($post_data as $post):
                ?>
             <tr>   
                  
                   <td> <?php echo $post['id']; ?> </td>
                            
                        
                   <td> <?php    echo $post['title'];?> </td>
                            
                        
                   <td>       <?php       $blood = $post['category_no'];
                            switch ($blood) {
                                case '1':
                                    print '食事';
                                    break;
                                case '2':
                                    print '旅行';
                                    break;
                                    default:
                                    echo 'その他';
                                }
                                ?> </td>
                        
                        <td>            <?php    echo $post['comment']; ?> </td>
                            
                        
                        <td>     <?php echo $post['created'].'<br>'; ?> </td>
                            
             </tr>       
                    
                <?php endforeach ?>
                
        </table>

    </div>
    <footer class="footer">Y&I group.inc</footer>
</body>
</html>
