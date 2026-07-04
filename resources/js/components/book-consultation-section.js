document.addEventListener('DOMContentLoaded', () => {
    const section = document.getElementById('bcSection');
    
    if (section) {
        // Load Calendly script dynamically
        if (!document.querySelector('script[src="https://assets.calendly.com/assets/external/widget.js"]')) {
            const script = document.createElement('script');
            script.src = "https://assets.calendly.com/assets/external/widget.js";
            script.async = true;
            document.body.appendChild(script);
        }

        const widgetContainer = document.getElementById('bcWidgetContainer');
        const skeleton = document.getElementById('bcSkeleton');
        let widgetReady = false;

        const showWidget = () => {
            if (widgetReady) return;
            widgetReady = true;
            
            if (skeleton) skeleton.classList.add('bc-skel-hidden');
            if (widgetContainer) widgetContainer.classList.add('bc-cw-ready');
        };

        const READY_EVENTS = new Set([
            'calendly.event_type_viewed',
            'calendly.profile_page_viewed',
            'calendly.date_and_time_selected',
        ]);

        const messageHandler = (e) => {
            if (e.data && e.data.event && READY_EVENTS.has(e.data.event)) {
                showWidget();
                window.removeEventListener('message', messageHandler);
            }
        };

        window.addEventListener('message', messageHandler);

        // Fallback after 5 seconds
        setTimeout(() => {
            showWidget();
        }, 5000);
    }
});
