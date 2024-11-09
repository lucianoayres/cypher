# Simple Text-to-Morse Code Converter

MORSE_CODE_DICT = {
    'A': '.-', 'B': '-...', 'C': '-.-.', 'D': '-..', 'E': '.',
    'F': '..-.', 'G': '--.', 'H': '....', 'I': '..', 'J': '.---',
    'K': '-.-', 'L': '.-..', 'M': '--', 'N': '-.', 'O': '---',
    'P': '.--.', 'Q': '--.-', 'R': '.-.', 'S': '...', 'T': '-',
    'U': '..-', 'V': '...-', 'W': '.--', 'X': '-..-', 'Y': '-.--',
    'Z': '--..', '1': '.----', '2': '..---', '3': '...--', '4': '....-', 
    '5': '.....', '6': '-....', '7': '--...', '8': '---..', '9': '----.', 
    '0': '-----', ' ': '/'
}

# Reverse the dictionary for Morse to text conversion
MORSE_TO_TEXT_DICT = {v: k for k, v in MORSE_CODE_DICT.items()}

def text_to_morse(text):
    return ' '.join(MORSE_CODE_DICT.get(char.upper(), '') for char in text)

def morse_to_text(morse):
    try:
        return ''.join(MORSE_TO_TEXT_DICT.get(code, '') for code in morse.split())
    except KeyError:
        return "Invalid Morse code sequence."

def main():
    while True:
        print("\n--- Text-Morse Converter ---")
        print("1. Convert Text to Morse Code")
        print("2. Convert Morse Code to Text")
        print("3. Exit")
        
        choice = input("Choose an option: ")
        
        if choice == '1':
            text = input("Enter text to convert to Morse code: ")
            print("Morse Code:", text_to_morse(text))
        elif choice == '2':
            morse = input("Enter Morse code to convert to text (use spaces between codes): ")
            print("Text:", morse_to_text(morse))
        elif choice == '3':
            print("Exiting. Goodbye!")
            break
        else:
            print("Invalid choice. Please choose a valid option.")

if __name__ == "__main__":
    main()
