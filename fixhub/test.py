import sys
import re
from collections import defaultdict

def merge_css_files(files):
    css_rules = defaultdict(set)
    css_order = []

    for file in files:
        try:
            with open(file, 'r', encoding='utf-8') as f:
                content = f.read()
                # Capture des sélecteurs et des déclarations
                blocks = re.findall(r'([^{]+)\s*\{([^}]+)\}', content, re.DOTALL)
                for selector, rules in blocks:
                    selector = selector.strip()
                    rules = set(rule.strip() for rule in rules.split(';') if rule.strip())
                    if selector not in css_rules:
                        css_order.append(selector)  # Maintenir l'ordre des sélecteurs
                    css_rules[selector].update(rules)
        except Exception as e:
            print(f"Erreur lors de la lecture du fichier {file}: {e}")
    
    # Construction du CSS final
    merged_css = []
    for selector in css_order:
        if css_rules[selector]:  # Évite les sélecteurs vides
            merged_css.append(f"{selector} {{")
            merged_css.extend(f"  {rule};" for rule in sorted(css_rules[selector]))
            merged_css.append("}\n")
    
    return "\n".join(merged_css)

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Utilisation : python merge_css.py fichier1.css fichier2.css ...")
        sys.exit(1)
    
    css_files = sys.argv[1:]
    result = merge_css_files(css_files)
    
    output_file = 'merged.css'
    with open(output_file, 'w', encoding='utf-8') as f:
        f.write(result)
    
    print(f"Les fichiers CSS ont été fusionnés avec succès dans '{output_file}'.")

