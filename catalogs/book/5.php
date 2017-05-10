<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 11:07 AM
 * Изменение разрешений или владельца файла
 * Требуется изменить разрешения или владельца файла; например, вы хотите за-
претить другим пользователям просмотр файла с конфиденциальными данными.
 */
chmod('/home/user/secrets.txt', 0400);
chown('/tmp/myfile.txt','sklar'); // Пользователь по имени
chgrp('/home/sklar/schedule.txt','soccer'); // Группа по имени
chown('/tmp/myfile.txt',5001); // Пользователь по uid
chgrp('/home/sklar/schedule.txt',102); // Группа по gid
