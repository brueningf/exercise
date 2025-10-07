export const hey = (message) => {
    if (/^\s*$/.test(message)) return 'Fine. Be that way!';
    if (/^(?=.*[A-Z])[^a-z/?]+$/g.test(message)) return 'Whoa, chill out!';
    if (/[A-Z]{3,}\?$/.test(message)) return 'Calm down, I know what I\'m doing!';
    if (/^.+\?\s*$/g.test(message)) return 'Sure.';

    return 'Whatever.';
};

