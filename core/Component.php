<?php

namespace Core;

interface Component {
    function Init($ctx);
    function ShutDown($ctx);
}