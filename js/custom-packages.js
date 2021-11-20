//script for paypal economy desktop
        // var order_id_desktop = 01;
        paypal.Button.render({
            // Configure environment
            env: 'production',
            client: {
                sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
                production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 50
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function (data, actions) {

                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: 25,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function () {
                    // Show a confirmation message to the buyer
                    //window.alert('Thank you for your purchase!');
                    window.location = 'thankyou';
                });
            }
        }, '#paypal-button-economy-desktop');

        //script for paypal standard desktop
        // var order_id_desktop = 01;
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
                production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 50
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function (data, actions) {

                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: 75,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function () {
                    // Show a confirmation message to the buyer
                    //window.alert('Thank you for your purchase!');
                    window.location = 'thankyou';
                });
            }
        }, '#paypal-button-standard-desktop');

        //script for paypal premium desktop
        // var order_id_desktop = 01;
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
                production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 50
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function (data, actions) {

                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: 200,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function () {
                    // Show a confirmation message to the buyer
                    //window.alert('Thank you for your purchase!');
                    window.location = 'thankyou';
                });
            }
        }, '#paypal-button-premium-desktop');



        //script for paypal economy mobile
        // var order_id_desktop = 01;
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
                production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 50
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function (data, actions) {

                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: 25,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function () {
                    // Show a confirmation message to the buyer
                    //window.alert('Thank you for your purchase!');
                    window.location = 'thankyou';
                });
            }
        }, '#paypal-button-economy-mobile');

        //script for paypal standard mobile
        // var order_id_desktop = 01;
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
                production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 50
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function (data, actions) {

                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: 75,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function () {
                    // Show a confirmation message to the buyer
                    //window.alert('Thank you for your purchase!');
                    window.location = 'thankyou';
                });
            }
        }, '#paypal-button-standard-mobile');

        //script for paypal premium mobile
        // var order_id_desktop = 01;
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
                production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 50
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function (data, actions) {

                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: 200,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function () {
                    // Show a confirmation message to the buyer
                    //window.alert('Thank you for your purchase!');
                    window.location = 'thankyou';
                });
            }
        }, '#paypal-button-premium-mobile');