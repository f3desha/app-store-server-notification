# app-store-server-notification
+ Run 'composer install'
+ Run 'php index.php'
+ Make POST hook request to url APP_URL/AppStoreServerNotifications/v1.php
with body payload:
`{"responseBodyV1": {
        "auto_renew_adam_id": 123,
        "auto_renew_product_id": 456
    },
    "notification_type": "INITIAL_BUY"
}`
+ Run 'php index.php' again