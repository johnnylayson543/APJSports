<?php

enum OrderStatus
{
    const IN_PROCESS = "in process";
    const READY_TO_COLLECT = "ready to collect";
    const READY_FOR_DELIVERY = "ready for delivery";
    const REFUNDED = "refunded";
    const ORDER_COMPLETE = "complete";
}
