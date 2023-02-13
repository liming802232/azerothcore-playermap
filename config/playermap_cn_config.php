<?php

// 玩家地图配置

$language         = "cn";

$site_encoding    = "utf-8";

$db_type          = 'MySQL';

$realm_db['addr']     = '127.0.0.1:3306';         // SQL服务器的IP:端口

$realm_db['user']     = 'root';                   // SQL服务器的用户名

$realm_db['pass']     = 'PASSWORD';           // SQL 服务器的密码

$realm_db['name']     = 'auth';                   // SQL数据库名称

$realm_db['encoding'] = 'utf8';                   // SQL 连接编码

//==== 对于每个领域，您必须填写 $world_db 和 $characters_db 以及 $server，用领域 ID 标记每个领域：例如：  $world_db[REALMID]['addr'] === //

// 数组中的位置必须表示 realmd ID

$world_db[1]['addr']          = '127.0.0.1:3306'; // 这个DB所在的SQL服务器 IP:端口

$world_db[1]['user']          = 'root';           // 这个DB所在的SQL服务器登录名

$world_db[1]['pass']          = 'PASSWORD';       // 这个DB所在的SQL服务器密码

$world_db[1]['name']          = 'world';          // 世界数据库名称，默认情况下 MaNGOS 为“mangos”，AzerothCore/TrinityCore 为“world”

$world_db[1]['encoding']      = 'utf8';           // SQL 连接编码

// 数组中的位置必须表示 realmd ID

$characters_db[1]['addr']     = '127.0.0.1:3306'; // SQL server IP:port this DB located on

$characters_db[1]['user']     = 'root';           // SQL server login this DB located on

$characters_db[1]['pass']     = 'PASSWORD';       // SQL server pass this DB located on

$characters_db[1]['name']     = 'characters';     // Character Database name

$characters_db[1]['encoding'] = 'utf8';           // SQL connection encoding

//---- 游戏服务器配置 ----

$server_type        =  1;           // 0=MaNGOS, 1=AzerothCore/TrinityCore

// 数组中的位置必须表示 realmd ID，与 $world_db 中的相同

$server[1]['addr']          = '127.0.0.1'; // 游戏服务器 IP，如 MiniManager 所见，来自您的网站托管服务商

$server[1]['addr_wan']      = '127.0.0.1'; // 客户端所见的游戏服务器IP - 必须是外部地址

$server[1]['game_port']     =  8085;       // 游戏服务器端口

$server[1]['rev']           = '';          // MaNGOS rev. 使用 (AzerothCore/TrinityCore 不需要这个)

$server[1]['both_factions'] =  true;       // 允许查看敌对阵营角色。 仅对玩家有效。

// === 玩家地图配置 === //

// GM 在线选项

$gm_online                         = true;

$gm_online_count                   = 100;

$map_gm_show_online_only_gmoff     = 1; // 仅当处于 '.gm off' 时才显示 GM 点 [1/0] 

$map_gm_show_online_only_gmvisible = 1; // 仅在'.gm visible on' 中显示 GM 点 [1/0] 

$map_gm_add_suffix                 = 1; // // 将 '{GM}' 添加到名称 [1/0]

$map_status_gm_include_all         = 0; // 包含“游戏中的所有 GM”/“地图上的人物”[1/0]

// 状态窗口选项:

$map_show_status =  1;                  // 显示服务器状态窗口 [1/0]

$map_show_time   =  1;                  // 显示自动更新定时器 1 - 开, 0 - 关

$map_time        =  5;                  // 地图自动更新时间 (秒), 0 - 不更新。

// 所有时间都以毫秒为单位设置（不要将时间设置为 < 1500 用于显示），0 表示禁用。

$map_time_to_show_uptime    = 3000;     // 显示正常更新时间的时间

$map_time_to_show_maxonline = 3000;     // 显示最大在线时间

$map_time_to_show_gmonline  = 3000;     // 显示GM在线时间

$developer_test_mode =  false;

$multi_realm_mode    =  true;

?>
