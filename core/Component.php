<?php

namespace Core;

interface Component {
    static function Init($ctx);
    static function ShutDown($ctx);
}