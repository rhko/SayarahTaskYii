<?php

namespace frontend\google\contracts;

interface GoogleFileAdapter
{
    function getFiles();

    function getFilePermissions($fileId);
}
