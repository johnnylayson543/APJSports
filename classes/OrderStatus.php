<?php

enum OrderStatus
{
    case IN_PROCESS;
    case READY_TO_COLLECT;
    case READY_FOR_DELIVERY;
    case REFUNDED;
    case ORDER_COMPLETE;
}
