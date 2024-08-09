document.addEventListener('DOMContentLoaded', () => {
  // Adaptative cursor
  document.body.innerHTML += '<div id="adaptive-cursor"></div>';

  if(document.querySelector("#adaptive-cursor")) {
    const cursor = {
      element: document.querySelector('#adaptive-cursor'),
      states: {
          default: {
            backgroundColor: 'var(--wp--preset--color--custom-primary)',
            height: 1,
            width: 1,
          }
      },
    };
  
    // Initial position, default state and events.
    function init() {
        gsap.set(cursor.element, {
          left: window.innerWidth / 2,
          top: window.innerHeight / 2,
        });
        updateCursor('default');
        document.onmousemove = handleMouseMove;
    }
    
    // Set new position and apply props.
    function handleMouseMove(event) {
      const targetElement = event.target;
      const isPointerCursor = window.getComputedStyle(targetElement).cursor === 'pointer';
      
      if (isPointerCursor) {
          cursor.element.style.display = 'none';
      } else {
          cursor.element.style.display = 'block';
      }

      gsap.to(cursor.element, 0.3, { left: event.clientX, top: event.clientY });
      const state = targetElement?.attributes['data-cursor']?.value || 'default';
      const label = targetElement?.attributes['data-cursor-label']?.value || '';
      const iconUrl = targetElement?.attributes['data-cursor-icon']?.value || null;
      updateCursor(state, label, iconUrl);
    }
    
    // Apply props and update inner html.
    function updateCursor(state, label, iconUrl) {
      gsap.to(cursor.element, 0.3, cursor.states[state] || cursor.states['default']);
      cursor.element.className = `has-${state}-state`;
    }
    
    init();
  }

  if(document.querySelectorAll('mark')) {
    var backgroundColor;
    const markElements = document.querySelectorAll('mark');
    const markGradiantElements = document.querySelectorAll('.mark-gradiant > mark')

    if (markGradiantElements.length > 0) {
      markGradiantElements.forEach(markElement => {
        backgroundColor = markElement.style.backgroundColor;
        const computedStyle = window.getComputedStyle(markElement);
        
        markElement.dataset.backgroundColor = computedStyle.backgroundColor;
        markElement.style.background = `linear-gradient(to right, ${backgroundColor} 0%, transparent 50%)`;
        markElement.style.backgroundSize = "200% 100%";
        markElement.style.backgroundPosition = "100% 0";
        markElement.style.animation = "slideBackground 2s forwards";
      });
    
      const keyframes = `@keyframes slideBackground {
        100% {
            background-position: 0 0;
        }
      }`;

      const style = document.createElement("style");
      style.innerHTML = keyframes;
      document.head.appendChild(style);
    }

    else {
      markElements.forEach(markElement => {
        backgroundColor = markElement.style.backgroundColor;
        const computedStyle = window.getComputedStyle(markElement);
  
        markElement.dataset.backgroundColor = computedStyle.backgroundColor;
        markElement.style.background = `linear-gradient(to right, ${backgroundColor} 50%, transparent 50%)`;
        markElement.style.backgroundSize = "200% 100%";
        markElement.style.backgroundPosition = "100% 0";
        markElement.style.animation = "slideBackground 2s forwards";
      });
    
      const keyframes = `@keyframes slideBackground {
        100% {
            background-position: 0 0;
        }
      }`;

      const style = document.createElement("style");
      style.innerHTML = keyframes;
      document.head.appendChild(style);
      }
  }

});
