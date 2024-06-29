<article class="x2p9q | f1k8s">
    <img
      class="a7d4x | t5s9r"
      src="{{ Voyager::image($item->thumbnail) }}"
      alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
      width="1920"
      height="2193"
    />
    <div class="j4e6r | q9r2p">
      <div class="v5u2d | c8t2p">
        <h2 class="m4k6w">{{$item->title}}</h2>

      </div>
      <button class="p7t2k9">اقرا المزيد</button>
    </div>
  </article>




  <style>
 @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

:root {
  /* Colors */
  --brand-color: hsl(46, 100%, 50%);
  --black: hsl(0, 0%, 0%);
  --white: hsl(0, 0%, 100%);
  /* Fonts */
  --font-title: "Montserrat", sans-serif;
  --font-text: "Lato", sans-serif;
}

/* RESET */

/* Box sizing rules */
*,
*::before,
*::after {
  box-sizing: border-box;
}

/* Remove default margin */


/* GLOBAL STYLES */


.m4k6w {
  font-size: 2.25rem;
  font-family: var(--font-title);
  color: var(--white);
  line-height: 1.1;
}

.r3t8v {
  font-family: var(--font-text);
  font-size: 1rem;
  line-height: 1.5;
  color: var(--white);
}

.flow > * + * {
  margin-top: var(--flow-space, 1em);
}

/* CARD COMPONENT */

.x2p9q {
  display: grid;
  place-items: center;
  width: 80vw;
  max-width: 21.875rem;
  height: 28.125rem;
  overflow: hidden;
  border-radius: 0.625rem;
  box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
}

.x2p9q > * {
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

.a7d4x {
  object-fit:fill;
  max-width: 100%;
  height: 100%;
}

.j4e6r {
  --flow-space: 0.9375rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-self: flex-end;
  height: 55%;
  padding: 12% 1.25rem 1.875rem;
  background: linear-gradient(
    180deg,
    hsla(0, 0%, 0%, 0) 0%,
    hsla(0, 0%, 0%, 0.3) 10%,
    hsl(0, 0%, 0%) 100%
  );
}

.v5u2d {
  --flow-space: 1.25rem;
}

.m4k6w {
  position: relative;
  width: fit-content;
  width: -moz-fit-content; /* Prefijo necesario para Firefox  */
}

.m4k6w::after {
  content: "";
  position: absolute;
  height: 0.3125rem;
  width: calc(100% + 1.25rem);
  bottom: calc((1.25rem - 0.5rem) * -1);
  left: -1.25rem;
  background-color: var(--brand-color);
}

.p7t2k9 {
  padding: 0.75em 1.6em;
  width: fit-content;
  width: -moz-fit-content; /* Prefijo necesario para Firefox  */
  font-variant: small-caps;
  font-weight: bold;
  border-radius: 0.45em;
  border: none;
  background-color: var(--brand-color);
  font-family: var(--font-title);
  font-size: 1.125rem;
  color: var(--black);
}

.p7t2k9:focus {
  outline: 2px solid black;
  outline-offset: -5px;
}

@media (any-hover: hover) and (any-pointer: fine) {
  .j4e6r {
    transform: translateY(62%);
    transition: transform 500ms ease-out;
    transition-delay: 500ms;
  }

  .m4k6w::after {
    opacity: 0;
    transform: scaleX(0);
    transition: opacity 1000ms ease-in, transform 500ms ease-out;
    transition-delay: 500ms;
    transform-origin: right;
  }

  .a7d4x {
    transition: transform 500ms ease-in;
  }

  .v5u2d > :not(.m4k6w),
  .p7t2k9 {
    opacity: 0;
    transition: transform 500ms ease-out, opacity 500ms ease-out;
  }

  .x2p9q:hover,
  .x2p9q:focus-within {
    transform: scale(1.05);
    transition: transform 500ms ease-in;
  }

  .x2p9q:hover .j4e6r,
  .x2p9q:focus-within .j4e6r {
    transform: translateY(0);
    transition: transform 500ms ease-in;
  }

  .x2p9q:focus-within .j4e6r {
    transition-duration: 0ms;
  }

  .x2p9q:hover .a7d4x,
  .x2p9q:focus-within .a7d4x {
    transform: scale(1.3);
  }

  .x2p9q:hover .v5u2d > :not(.m4k6w),
  .x2p9q:hover .p7t2k9,
  .x2p9q:focus-within .v5u2d > :not(.m4k6w),
  .x2p9q:focus-within .p7t2k9 {
    opacity: 1;
    transition: opacity 500ms ease-in;
    transition-delay: 1000ms;
  }

  .x2p9q:hover .m4k6w::after,
  .x2p9q:focus-within .m4k6w::after {
    opacity: 1;
    transform: scaleX(1);
    transform-origin: left;
    transition: opacity 500ms ease-in, transform 500ms ease-in;
    transition-delay: 500ms;
  }
}

  </style>
