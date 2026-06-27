<?php $current_route = Route::currentRouteName(); ?>

<div class="sidebar-logo-area">
    <a href="javascript:;" class="sidebar-logos">
        <img class="sidebar-logo-lg" height="50px" src="<?php echo e(get_image(get_frontend_settings('dark_logo'))); ?>" alt="">
        <img class="sidebar-logo-sm" height="40px" src="<?php echo e(get_image(get_frontend_settings('favicon'))); ?>" alt="">
    </a>
    <button class="sidebar-cross menu-toggler d-block d-lg-none">
        <span class="fi-rr-cross"></span>
    </button>
</div>
<h3 class="sidebar-title fs-12px px-30px pb-20px mt-4 text-uppercase"><?php echo e(get_phrase('Main Menu')); ?></h3>
<div class="sidebar-nav-area">

    <nav class="sidebar-nav">
        <ul class="px-14px pb-24px">
            <li class="sidebar-first-li <?php echo e($current_route == 'admin.dashboard' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <span class="icon fi-rr-apps"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Dashboard')); ?></span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>

    <nav class="sidebar-nav">
        <h3 class="sidebar-title fs-12px px-30px pb-3 text-uppercase"><?php echo e(get_phrase('Order Management')); ?></h3>
        <ul class="px-14px pb-24px">
            <li class="sidebar-first-li <?php echo e($current_route == 'admin.orders' || $current_route == 'admin.order.details' || $current_route == 'admin.order.add' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.orders')); ?>">
                    <span class="icon fi-rr-clipboard-list-check"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Orders')); ?></span>
                    </div>
                </a>
            </li>
            <li class="sidebar-first-li <?php echo e($current_route == 'admin.order.return_requests'  || $current_route == 'admin.order.return_details' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.order.return_requests')); ?>">
                    <span class="icon fi-rr-house-laptop"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Return Requests')); ?></span>
                    </div>
                </a>
            </li>
            <li class="sidebar-first-li first-li-have-sub <?php if($current_route == 'admin.payments' || $current_route == 'admin.payment.invoice' || $current_route == 'admin.payments.offline_request' ): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-usd-circle"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Payments')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Payments')); ?></li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.payments' || $current_route == 'admin.payment.invoice' || $current_route == 'admin.revenue'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.payments')); ?>"><?php echo e(get_phrase('Payment History')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php if($current_route == 'admin.payments.offline_request'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.payments.offline_request')); ?>"><?php echo e(get_phrase('Pending request(Offline)')); ?></a>
                    </li>
                </ul>
            </li>

             <li class="sidebar-first-li first-li-have-sub <?php if( $current_route == 'admin.vendor.settings' || $current_route == 'admin.vendor.payout' ): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi fi-rr-file-invoice-dollar"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Payouts')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Payouts')); ?></li>
                     <li class="sidebar-second-li <?php if($current_route == 'admin.vendor.payout'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.vendor.payout')); ?>"><?php echo e(get_phrase('Vendor Payout')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php if($current_route == 'admin.vendor.settings'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.vendor.settings')); ?>"><?php echo e(get_phrase('Revenue Settings')); ?></a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-first-li <?php echo e($current_route == 'admin.order.statuses'  || $current_route == 'admin.order.status_edit' || $current_route == 'admin.order.status_add' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.order.statuses')); ?>">
                    <span class="icon  fi-rr-chart-pyramid"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Manage Status')); ?></span>
                    </div>
                </a>
            </li>

            <li class="sidebar-first-li first-li <?php if($current_route == 'admin.pos.sales.index'): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('admin.pos.sales.index')); ?>">
                    <span class="icon fi-rr-box-open-full"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('POS')); ?></span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>

    <nav class="sidebar-nav">
        <h3 class="sidebar-title fs-12px px-30px pb-3 text-uppercase"><?php echo e(get_phrase('Product Management')); ?></h3>
        <ul class="px-14px pb-24px">

            <li class="sidebar-first-li first-li-have-sub <?php if($current_route == 'admin.categories' || $current_route == 'admin.category.add' || $current_route == 'admin.category.edit' || $current_route == 'admin.attribute_types' || $current_route == 'admin.attribute_type.edit' || $current_route == 'admin.attribute_type.add' || $current_route == 'admin.attributes'): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-chart-tree-map"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Category')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Category')); ?></li>
                    <li class="sidebar-second-li <?php if($current_route == 'admin.categories' || $current_route == 'admin.category.edit' || $current_route == 'admin.category.add'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.categories')); ?>"><?php echo e(get_phrase('Categories')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php if($current_route == 'admin.attribute_types' || $current_route == 'admin.attribute_type.edit' || $current_route == 'admin.attribute_type.add' || $current_route == 'admin.attributes'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.attribute_types')); ?>"><?php echo e(get_phrase('Attributes')); ?></a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-first-li first-li-have-sub <?php if($current_route == 'admin.products' || $current_route == 'admin.product.add' || $current_route == 'admin.product.edit' || $current_route == 'admin.coupons' || $current_route == 'admin.coupon.add' || $current_route == 'admin.coupon.edit'): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-box-open-full"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Product')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Product')); ?></li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.products' || $current_route == 'admin.product.add' || $current_route == 'admin.product.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.products')); ?>"><?php echo e(get_phrase('Products')); ?></a>
                    </li>
                </ul>
            </li>

          <li class="sidebar-first-li first-li-have-sub <?php if($current_route == 'admin.stores' || $current_route == 'admin.store.add' ||  $current_route == 'admin.store.edit' || $current_route == 'admin.store.profile'|| $current_route == 'admin.store.settings' || $current_route == 'admin.vendor.application'): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-home-location"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Store Management')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Store Management')); ?></li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.stores' || $current_route == 'admin.store.add' || $current_route == 'admin.store.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.stores')); ?>"><?php echo e(get_phrase('Store List')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php if($current_route == 'admin.store.profile'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.store.profile')); ?>"><?php echo e(get_phrase('My store profile')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php if($current_route == 'admin.store.settings'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.store.settings')); ?>"><?php echo e(get_phrase('My store settings')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php if($current_route == 'admin.vendor.application'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.vendor.application')); ?>"><?php echo e(get_phrase('Application')); ?></a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-first-li <?php echo e($current_route == 'admin.brands' || $current_route == 'admin.brand.edit' || $current_route == 'admin.brand.add' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.brands')); ?>">
                    <span class="icon fi-rr-badge-sheriff"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Brands')); ?></span>
                    </div>
                </a>
            </li>

            <li class="sidebar-first-li <?php echo e($current_route == 'admin.events' || $current_route == 'admin.event.add' || $current_route == 'admin.event.edit' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.events')); ?>">
                    <span class="icon fi-rr-stopwatch"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Events')); ?></span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>

    <nav class="sidebar-nav">
        <h3 class="sidebar-title fs-12px px-30px pb-3 text-uppercase"><?php echo e(get_phrase('Website')); ?></h3>
        <ul class="px-14px pb-24px">
            <li class="sidebar-first-li first-li-have-sub <?php if($current_route == 'admin.customers' || $current_route == 'admin.customer.add' || $current_route == 'admin.customer.edit' || $current_route == 'admin.staffs' || $current_route == 'admin.staff.add' || $current_route == 'admin.staff.edit' || $current_route == 'admin.roles' || $current_route == 'admin.role.add' || $current_route == 'admin.role.edit' ): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-users-alt"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('User')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Users')); ?></li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.customers' || $current_route == 'admin.customer.add' || $current_route == 'admin.customer.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.customers')); ?>"><?php echo e(get_phrase('Customers')); ?></a>
                    </li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.staffs' || $current_route == 'admin.staff.add' || $current_route == 'admin.staff.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.staffs')); ?>"><?php echo e(get_phrase('Staffs')); ?></a>
                    </li>

                </ul>
            </li>
            <li class="sidebar-first-li <?php echo e($current_route == 'admin.messages' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.messages')); ?>">
                    <span class="icon fi-rr-messages"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Message')); ?></span>
                    </div>
                    <?php
                        $count_unread_message = App\Models\Message::where('read_status', 0)
                            ->where(function ($query) {
                                $query->where('sender_id', auth()->user()->id)->orWhere('receiver_id', auth()->user()->id);
                            })
                            ->count();
                    ?>
                    <?php if($count_unread_message > 0): ?>
                        <span class="d-inline-block mt-2px badge bg-danger ms-auto">
                            <?php echo e($count_unread_message); ?>

                        </span>
                    <?php endif; ?>
                </a>
            </li>


            <li class="sidebar-first-li first-li-have-sub <?php if($current_route == 'admin.blogs' || $current_route == 'admin.blog.add' || $current_route == 'admin.blog.edit' || $current_route == 'admin.blog.categories' || $current_route == 'admin.blog.category.add' || $current_route == 'admin.blog.category.edit'): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-blog-text"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Blog')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Blog')); ?></li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.blogs' || $current_route == 'admin.blog.add' || $current_route == 'admin.blog.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.blogs')); ?>"><?php echo e(get_phrase('Blogs')); ?></a>
                    </li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.blog.categories' || $current_route == 'admin.blog.category.add' || $current_route == 'admin.blog.category.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.blog.categories')); ?>"><?php echo e(get_phrase('Categories')); ?></a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-first-li first-li-have-sub <?php if($current_route == 'admin.countries' || $current_route == 'admin.country.add' || $current_route == 'admin.country.edit' || $current_route == 'admin.states' || $current_route == 'admin.state.add' || $current_route == 'admin.state.edit' || $current_route == 'admin.cities' || $current_route == 'admin.city.add' || $current_route == 'admin.city.edit'): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-location-alt"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Location')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Locations')); ?></li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.countries' || $current_route == 'admin.country.add' || $current_route == 'admin.country.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.countries')); ?>"><?php echo e(get_phrase('Countries')); ?></a>
                    </li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.states' || $current_route == 'admin.state.add' || $current_route == 'admin.state.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.states')); ?>"><?php echo e(get_phrase('States')); ?></a>
                    </li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.cities' || $current_route == 'admin.city.add' || $current_route == 'admin.city.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.cities')); ?>"><?php echo e(get_phrase('Cities')); ?></a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-first-li first-li-have-sub <?php if($current_route == 'admin.contacts' || $current_route == 'admin.contact.settings'): ?> active showMenu <?php endif; ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi-rr-lock-alt"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Contact Us')); ?></span>
                        <?php
                            $unread_contacts = App\Models\Contact::where('is_read', 0)->count()
                        ?>
                        <?php if($unread_contacts > 0): ?>
                            <span class="badge bg-danger">
                                <?php echo e($unread_contacts); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('Contact Us')); ?></li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.contacts' || $current_route == 'admin.contacts.add' || $current_route == 'admin.contacts.edit'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.contacts')); ?>">
                            <?php echo e(get_phrase('Contact List')); ?>

                            <?php if($unread_contacts > 0): ?>
                                (<?php echo e($unread_contacts); ?>)
                            <?php endif; ?>
                        </a>
                    </li>

                    <li class="sidebar-second-li <?php if($current_route == 'admin.contact.settings'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.contact.settings')); ?>"><?php echo e(get_phrase('Contact settings')); ?></a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>








    <nav class="sidebar-nav">
        <h3 class="sidebar-title fs-12px px-30px pb-3 text-uppercase"><?php echo e(get_phrase('Settings')); ?></h3>
        <ul class="px-14px pb-24px pb-5 mb-5">
            <li class="sidebar-first-li first-li-have-sub <?php echo e($current_route == 'admin.system.settings' || $current_route == 'admin.website.settings' || $current_route == 'admin.settings' || $current_route == 'admin.smtp.settings' || $current_route == 'admin.payment.settings' || $current_route == 'admin.seo.settings' || $current_route == 'admin.about' || $current_route == 'admin.pages' || $current_route == 'admin.page.add' || $current_route == 'admin.page.edit' || $current_route == 'admin.languages' || $current_route == 'admin.language.edit' || $current_route == 'admin.themes' || $current_route == 'admin.theme.edit' || $current_route == 'admin.language.phrases.edit' ? 'active' : ''); ?>">
                <a href="javascript:void(0);">
                    <span class="icon fi fi-rr-settings"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Settings')); ?></span>
                    </div>
                </a>
                <ul class="first-sub-menu">
                    <li class="first-sub-menu-title fs-14px mb-18px"><?php echo e(get_phrase('System Settings')); ?></li>
                    <li class="sidebar-second-li <?php echo e($current_route == 'admin.system.settings' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.system.settings')); ?>"><?php echo e(get_phrase('System Settings')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php echo e($current_route == 'admin.website.settings' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.website.settings')); ?>"><?php echo e(get_phrase('Website Settings')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php echo e($current_route == 'admin.themes' || $current_route == 'admin.theme.edit' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.themes')); ?>"><?php echo e(get_phrase('Frontend themes')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php echo e($current_route == 'admin.smtp.settings' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.smtp.settings')); ?>"><?php echo e(get_phrase('SMTP Settings')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php echo e($current_route == 'admin.payment.settings' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.payment.settings')); ?>"><?php echo e(get_phrase('Payment Settings')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php echo e($current_route == 'admin.languages' || $current_route == 'admin.language.edit' || $current_route == 'admin.language.phrases.edit' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.languages')); ?>"><?php echo e(get_phrase('Languages')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php echo e($current_route == 'admin.seo.settings' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.seo.settings')); ?>"><?php echo e(get_phrase('SEO Settings')); ?></a>
                    </li>
                    <li class="sidebar-second-li <?php echo e($current_route == 'admin.about' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.about')); ?>"><?php echo e(get_phrase('About')); ?></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-first-li <?php echo e($current_route == 'admin.profile' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.profile')); ?>">
                    <span class="icon fi-rr-clipboard-user"></span>
                    <div class="text">
                        <span><?php echo e(get_phrase('Profile')); ?></span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</div>


<script>
    "use strict";

    document.addEventListener("DOMContentLoaded", function() {
        // Restore scroll position if it exists in localStorage
        const scrollPos = localStorage.getItem('navScrollPos');
        const sidebarNavArea = document.querySelector('.sidebar-nav-area');
        if (scrollPos) {
            sidebarNavArea.scrollTop = scrollPos;
        }

        // Ensure the active element is visible
        const activeElement = document.querySelector('.sidebar-nav-area .active');
        if (activeElement) {
            const activeElementTop = activeElement.getBoundingClientRect().top;
            const navAreaTop = sidebarNavArea.getBoundingClientRect().top;
            const navAreaBottom = navAreaTop + sidebarNavArea.clientHeight;

            if (activeElementTop < navAreaTop || activeElementTop > navAreaBottom) {
                sidebarNavArea.scrollTop = activeElement.offsetTop - sidebarNavArea.offsetTop;
            }
        }

        // Save scroll position before page unload
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('navScrollPos', sidebarNavArea.scrollTop);
        });
    });
</script>
<?php /**PATH C:\laragon\www\elevate\resources\views/admin/navigation.blade.php ENDPATH**/ ?>