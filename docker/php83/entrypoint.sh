#!/bin/sh

# Read environment variables with default values
PODSLEEP=${PODSLEEP:-no}
DISABLE_ICMP=${DISABLE_ICMP:-no}

# Check the value of PODSLEEP and act accordingly
if [ "$PODSLEEP" = "yes" ]; then
  echo "[ENTRYPOINT] PODSLEEP is set to yes. Sleeping the container for 9999 days..."
  sleep 9999d
else
  # Disable ICMP if specified
  if [ "$DISABLE_ICMP" = "true" ]; then
      echo "Disabling ICMP..."
      sysctl -w net.ipv4.icmp_echo_ignore_all=1
  else
      echo "ICMP remains enabled."
  fi
  
  # Execute the main container command and replace the shell process with php-fpm
  echo "[ENTRYPOINT] PODSLEEP is set to no. Running PHP-FPM..."
  exec php-fpm
fi

# Print environment variables for debugging
printenv | sort
