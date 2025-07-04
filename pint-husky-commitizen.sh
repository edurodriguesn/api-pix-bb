#!/bin/sh

# Instala Laravel Pint
composer require laravel/pint --dev

# Instala Husky
npm install husky --save-dev
npx husky install

# Dá permissão de execução ao pre-commit
chmod +x .husky/pre-commit

# Escreve o conteúdo desejado no pre-commit
cat > .husky/pre-commit << 'EOF'
#!/usr/bin/env sh

FILES=$(git diff --cached --name-only --diff-filter=ACM | grep -E '\.php$')

if [ "$FILES" ]; then
  ./vendor/bin/pint $FILES
fi

composer test
EOF

# Instala Commitizen
npm install --save-dev commitizen
