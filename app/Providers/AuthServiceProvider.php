<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Announcement;
use App\Models\Comment;
use App\Models\Invoice;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCatalog;
use App\Models\Profile;
use App\Models\Subscription;
use App\Models\Team;
use App\Models\TeamInvitation;
use App\Models\Ticket;
use App\Policies\AnnouncementPolicy;
use App\Policies\CommentPolicy;
use App\Policies\InvoicePolicy;
use App\Policies\NotificationPolicy;
use App\Policies\OrderPolicy;
use App\Policies\PostPolicy;
use App\Policies\ProductCatalogPolicy;
use App\Policies\ProductPolicy;
use App\Policies\ProfilePolicy;
use App\Policies\SubscriptionPolicy;
use App\Policies\TeamInvitationPolicy;
use App\Policies\TeamPolicy;
use App\Policies\TicketPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Profile::class => ProfilePolicy::class,
        Post::class => PostPolicy::class,
        Comment::class => CommentPolicy::class,
        Announcement::class => AnnouncementPolicy::class,
        Notification::class => NotificationPolicy::class,
        Subscription::class => SubscriptionPolicy::class,
        Team::class => TeamPolicy::class,
        TeamInvitation::class => TeamInvitationPolicy::class,
        ProductCatalog::class => ProductCatalogPolicy::class,
        Invoice::class => InvoicePolicy::class,
        Ticket::class => TicketPolicy::class,
        Product::class => ProductPolicy::class,
        Order::class => OrderPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
