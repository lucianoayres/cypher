package examples;

public class Payment {
  // Fields for payment details
  private String paymentId;
  private String userId;
  private double amount;
  private String paymentMethod;  // e.g., "Credit Card", "PayPal", "Bank Transfer"
  private String status;         // e.g., "Pending", "Completed", "Failed"

  // Constructor
  public Payment(String paymentId, String userId, double amount, String paymentMethod) {
      this.paymentId = paymentId;
      this.userId = userId;
      this.amount = amount;
      this.paymentMethod = paymentMethod;
      this.status = "Pending"; // Default status when payment is created
  }

  // Getters
  public String getPaymentId() {
      return paymentId;
  }

  public String getUserId() {
      return userId;
  }

  public double getAmount() {
      return amount;
  }

  public String getPaymentMethod() {
      return paymentMethod;
  }

  public String getStatus() {
      return status;
  }

  // Setters
  public void setStatus(String status) {
      this.status = status;
  }

  // Simulate payment processing
  public boolean processPayment() {
      // Simulate different outcomes based on payment method or amount
      System.out.println("Processing payment of $" + amount + " using " + paymentMethod + "...");
      if (amount > 0) {
          // Assume the payment is successful for simplicity
          status = "Completed";
          System.out.println("Payment successful. Payment ID: " + paymentId);
          return true;
      } else {
          // Payment fails if the amount is invalid
          status = "Failed";
          System.out.println("Payment failed. Invalid amount.");
          return false;
      }
  }

  // Display payment details
  public void displayPaymentDetails() {
      System.out.println("\nPayment Details:");
      System.out.println("Payment ID: " + paymentId);
      System.out.println("User ID: " + userId);
      System.out.println("Amount: $" + amount);
      System.out.println("Payment Method: " + paymentMethod);
      System.out.println("Status: " + status);
  }

  public static void main(String[] args) {
      // Create a sample payment for testing
      Payment payment = new Payment("PAY12345", "USER67890", 150.75, "Credit Card");

      // Display initial payment details
      payment.displayPaymentDetails();

      // Process the payment
      boolean result = payment.processPayment();

      // Display updated payment details after processing
      if (result) {
          System.out.println("\nPayment processed successfully.");
      } else {
          System.out.println("\nPayment processing failed.");
      }

      payment.displayPaymentDetails();
  }
}