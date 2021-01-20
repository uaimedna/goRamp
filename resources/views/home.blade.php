<?php if (Auth::check()) { ?>
    <?php if (Auth::user()->can('viewCurrentUser', \App\Orders::class)) { ?>
        <a href="<?php echo route('orders.current') ?>">View current user orders</a>
    <?php } ?>

    <?php if (Auth::user()->can('viewAll', \App\Orders::class)) { ?>
        <a href="<?php echo route('orders.all') ?>">View all orders</a>
    <?php } ?>

    <?php if (Auth::user()->can('allOrdersWithTrash', \App\Orders::class)) { ?>
        <a href="<?php echo route('orders.allWithTrash') ?>">View all orders with deleted orders</a>
    <?php } ?>

    <?php if (Auth::user()->can('viewTrash', \App\Orders::class)) { ?>
        <a href="<?php echo route('orders.allTrash') ?>">View all deleted orders</a>
    <?php } ?>
<?php } else { ?>
    <a href="<?php echo route('auth.login'); ?>">Login</a>
<?php } ?>
