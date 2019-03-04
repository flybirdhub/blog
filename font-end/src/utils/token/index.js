export const token = {
    set: (s) => {
        localStorage.setItem('token', s)
    },
    get: () => {
        return localStorage.getItem('token')
    },
    clear() {
        localStorage.removeItem('token')
    }
}
