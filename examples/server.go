package main

import (
	"fmt"
	"log"
	"net/http"
	"time"
)

func helloHandler(w http.ResponseWriter, r *http.Request) {
    logRequest(r)
    fmt.Fprintln(w, "Hello, World!")
}

func timeHandler(w http.ResponseWriter, r *http.Request) {
    logRequest(r)
    currentTime := time.Now().Format("Mon Jan 2 15:04:05 MST 2006")
    fmt.Fprintf(w, "Current server time: %s\n", currentTime)
}

func greetHandler(w http.ResponseWriter, r *http.Request) {
    logRequest(r)
    name := r.URL.Query().Get("name")
    if name == "" {
        name = "Guest"
    }
    fmt.Fprintf(w, "Hello, %s!\n", name)
}

func notFoundHandler(w http.ResponseWriter, r *http.Request) {
    logRequest(r)
    http.Error(w, "Custom 404: Page Not Found", http.StatusNotFound)
}

func logRequest(r *http.Request) {
    log.Printf("%s %s %s", r.Method, r.URL.Path, r.RemoteAddr)
}

func main() {
    http.HandleFunc("/", helloHandler)
    http.HandleFunc("/time", timeHandler)
    http.HandleFunc("/greet", greetHandler)

    // Custom 404 handler
    http.HandleFunc("/notfound", notFoundHandler)
    http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
        if r.URL.Path != "/" && r.URL.Path != "/time" && r.URL.Path != "/greet" {
            notFoundHandler(w, r)
            return
        }
    })

    log.Println("Starting server on :8080")
    err := http.ListenAndServe(":8080", nil)
    if err != nil {
        log.Fatalf("Error starting server: %v", err)
    }
}
