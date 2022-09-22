<?php

$file_info = stat("fopen.txt");

echo $file_info[7];

// [0] or [dev] - Device number
// [1] or [ino] - Inode number
// [2] or [mode] - Inode protection mode
// [3] or [nlink] - Number of links
// [4] or [uid] - User ID of owner
// [5] or [gid] - Group ID of owner
// [6] or [rdev] - Inode device type
// [7] or [size] - Size in bytes
// [8] or [atime] - Last access (as Unix timestamp)
// [9] or [mtime] - Last modified (as Unix timestamp)
// [10] or [ctime] - Last inode change (as Unix timestamp)
// [11] or [blksize] - Blocksize of filesystem IO (if supported)
// [12] or [blocks] - Number of blocks allocated